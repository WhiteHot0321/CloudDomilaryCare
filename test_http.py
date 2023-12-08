import requests
import random 
import time
import datetime 
import json


import paho.mqtt.client as mqtt
ISOTIMEFORMAT = '%Y/%m/%d %H:%M:%S'
client2 = mqtt.Client()
client2.connect("mqttgo.io", 1883, 60)
mqtt_topic_list = ["MQTT/reset/LC2", "MQTT/reset/LC3", "MQTT/reset/LC4", "MQTT/reset/LC5", "MQTT/reset/LC6", "MQTT/reset/LC7", "MQTT/reset/LC8"]

# 當地端程式連線伺服器得到回應時，要做的動作
def on_connect(client, userdata, flags, rc):
    print("Connected with result code "+str(rc))
    for topic in mqtt_topic_list:
        client.subscribe(topic)
    # 將訂閱主題寫在on_connet中
    # 如果我們失去連線或重新連線時 
    # 地端程式將會重新訂閱

# 當接收到從伺服器發送的訊息時要進行的動作
count=int(0)
def on_message(client, userdata, msg):
    global count
    count=count+1
    # 轉換編碼utf-8才看得懂中文
    t = datetime.datetime.now().strftime(ISOTIMEFORMAT)
    print(msg.topic+" "+str(count)+ "th "+ msg.payload.decode('utf-8'))
    #msg.payload.decode('utf-8').add(str(t))
    #msg=msg+str(t)
    i=msg.payload.decode('utf-8')
    print(i)
    web = requests.get('http://127.0.0.1:3000/sensor?temp='+str(i)) 
    time.sleep(500/1000)
    

    t0=(round(random.uniform(30,60),2))
    payload = {'Temperature' : msg.payload.decode('utf-8') , 'Time' : t,'mqtt_message': {'topic': msg.topic, 'payload': msg.payload.decode()}}
    

    if (count % 10 ==0):
        client2.publish("MQTT/reset/LC1", json.dumps(payload))
        print("MQTT/reset/LC1"+" "+str(count/10)+ "th "+ msg.payload.decode('utf-8')+'Time ' +str (t))


# 連線設定
# 初始化地端程式
client = mqtt.Client()

# 設定連線的動作
client.on_connect = on_connect

# 設定接收訊息的動作
client.on_message = on_message

# 設定登入帳號密碼
#client.username_pw_set("try","xxxx")

# 設定連線資訊(IP, Port, 連線時間)
client.connect("mqttgo.io", 1883, 60)

# 開始連線，執行設定的動作和處理重新連線問題
# 也可以手動使用其他loop函式來進行連接
client.loop_forever()



# 使用 http get 方法
'''
while True:
    i=round(random.uniform(30,60),2)
    print(i)
    web = requests.get('http://127.0.0.1:3002/sensor?temp='+str(i)) 
    time.sleep(500/1000)

'''

    


