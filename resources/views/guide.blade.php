<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>可持續發展目標</title>
    <style>
        /* 頁面基礎樣式 */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            box-sizing: border-box;
        }

        /* 大標題 */
        h1 {
            font-size: 4rem;
            color: #078531;
            margin-bottom: 20px;
        }

        /* 子標題 */
        h2 {
            font-size: 2rem;
            color: #206ee4;
            margin-top: 0;
        }

        /* 子標題超連結  (特效) */
        h2 a {
            color: #0288d1;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        /* 子標題 hover 效果 */
        h2 a:hover {
            color: #01579b;
            text-decoration: underline;
        }

        /* 圖片樣式 */
        .image-container {
            margin: 20px 0; /* 上下間距 */
            text-align: center; /* 使圖片居中 */
        }

        .image-container img {
            width: 80%; /* 圖片寬度為頁面寬度的80% */
            max-width: 600px; /* 最大寬度為600px */
            height: auto; /* 高度自動調整，保持比例 */
            border-radius: 8px; /* 圓角邊框 */
        }
    </style>
</head>
<body>

    <h1>可持續發展目標</h1>

    <!-- 插入圖片 -->
    <div class="image-container">
        <img src="https://sdg.tcu.edu.tw/wp-content/uploads/2020/10/E_SDG-goals_icons-individual-rgb-08.png" alt="可持續發展目標">
    </div>

    <!-- 子標題設置為超連結，指向 SurveyStatistics 頁面 -->
    <h2><a href="{{ url('SurveyStatistics') }}">勞工生活與就業狀況調查</a></h2>

    <p>這項調查旨在評估勞工的生活狀況與就業情況，並為政策制定者提供有關如何改善勞工生活條件的數據。</p>

</body>
</html>