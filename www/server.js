const express = require('express');
const bodyParser = require('body-parser');

const app = express();
const port = 3000;

app.use(bodyParser.urlencoded({ extended: true }));

// 模擬用戶（在實際應用中，應該使用數據庫替換這個）
const users = [
  { username: 'user1', password: 'password1' },
  { username: 'user2', password: 'password2' },
  // 根據需要添加更多用戶
];

// 提供靜態文件（HTML、CSS、圖像等）
app.use(express.static('public'));

// 處理登錄請求
app.post('/login', (req, res) => {
  const { username, password } = req.body;

  // 檢查提供的用戶名和密碼是否與任何用戶匹配
  const user = users.find((user) => user.username === username && user.password === password);

  if (user) {
    res.send('登錄成功'); // 在實際應用中，您可能希望重定向到不同的頁面或發送一個令牌
  } else {
    res.status(401).send('無效的用戶名或密碼');
  }
});

app.listen(port, () => {
  console.log(`服務器運行在端口${port}`);
});
