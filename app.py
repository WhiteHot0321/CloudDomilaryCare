from flask import Flask, render_template
from flask_socketio import SocketIO
from datetime import date
import json
import paho.mqtt.client as mqtt

app = Flask(__name__, template_folder='templates/', static_folder='www/')
socketio = SocketIO(app)

# MQTT設定
mqtt_broker = "mqtt.eclipse.org"
mqtt_port = 1883
mqtt_topic_list = ["MQTT/reset/LC2", "MQTT/reset/LC3", "MQTT/reset/LC4", "MQTT/reset/LC5", "MQTT/reset/LC6", "MQTT/reset/LC7", "MQTT/reset/LC8"]

# MQTT連接回調函數
def on_connect(client, userdata, flags, rc):
    print("Connected with result code "+str(rc))
    for topic in mqtt_topic_list:
        client.subscribe(topic)

# MQTT消息回調函數
def on_message(client, userdata, msg):
    print(msg.topic+" "+str(msg.payload))
    # 發送消息到網頁
    socketio.emit('mqtt_message', {'topic': msg.topic, 'payload': msg.payload.decode()})

# 初始化MQTT客戶端
mqtt_client = mqtt.Client()
mqtt_client.on_connect = on_connect
mqtt_client.on_message = on_message
mqtt_client.connect("mqttgo.io", 1883, 60)

# 啟動MQTT客戶端
mqtt_client.loop_start()

# Flask路由
@app.route('/')
def index():
    return render_template('Home.html')

@app.route('/AboutUs.html')
def about_us():
    return render_template('AboutUs.html')

@app.route('/Account.html')
def account():
    return render_template('Account.html')

@app.route('/Devices.html')
def devices():
    return render_template('Devices.html')

@app.route('/Forum.html')
def forum():
    return render_template('Forum.html')

# SocketIO事件處理
@socketio.on('connect')
def handle_connect():
    print('Client connected')


if __name__ == '__main__':
    socketio.run(app, debug=True)
