<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>歡迎頁面</title>
  <style>
    /* 基本頁面設置 */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to bottom right, #00b4d8, #0077b6);
      color: #fff;
      height: 100vh;
      display: flex;
      text-align: center;
    }

    header {
        caret-color: transparent;
        position: absolute;
        height: 10%;
        background: #007bff;
        width: 100%;
        color: white;
        padding: 10px 0;
        text-align: top;
    }

    /* 容器設置 */
    .container {
        caret-color: transparent;
        display: flex;
        /* justify-content: center; */
        margin: 10% auto auto auto;
        /* align-items: center; */
        
    }

    .content {
      background: rgba(0, 0, 0, 0.6);
      padding: 40px;
      border-radius: 8px;
      text-align: center;
      /* max-width: 400px; */
      width: 100%;
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      color: #fff;
    }

    p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      color: #f1f1f1;
    }

    /* 按鈕樣式 */
    .btn {
      display: inline-block;
      padding: 15px 30px;
      font-size: 1.2rem;
      background-color: #ff6700;
      color: #fff;
      text-decoration: none;
      border-radius: 50px;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn:hover {
      background-color: #ff4500;
      transform: translateY(-5px);
    }

    .btn:active {
      transform: translateY(2px);
    }

    /* 針對移動設備的適應 */
    @media (max-width: 768px) {
      .content {
        padding: 20px;
      }

      h1 {
        font-size: 2rem;
      }

      p {
        font-size: 1rem;
      }

      .btn {
        padding: 12px 25px;
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
    <header>
        <h1>可持續發展目標（SDG）介紹 (team09)</h1>

    </header>
  <div class="container">
    <div class="content">
      <h1>勞工生活及就業狀況調查統計頁面</h1>
      <a href="http://127.0.0.1:8000/SurveyStatistcs" class="btn">進入調查統計</a>
    </div>
  </div>
</body>
</html>
