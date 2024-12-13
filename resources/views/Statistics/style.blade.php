<style>
    /* 全局樣式 */
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f9;
        color: #333;
    }

    /* 變更滑鼠游標(測試中) */
    .myMouse {
        cursor: url('{{ asset('images/doro.png') }}'), auto;
    }

    h1 {
        text-align: center;
        background-color: #4CAF50;
        color: white;
        padding: 20px 0;
        margin-bottom: 30px;
    }

    table {
        width: 90%;
        margin: 0 auto;
        border-collapse: collapse;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
    }

    th {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }

    td {
        background-color: #f9f9f9;
    }

    tr:hover td {
        background-color: #f1f1f1;
    }

    /* 響應式設計 */
    @media screen and (max-width: 768px) {
        table {
            width: 100%;
            font-size: 14px;
        }

        th, td {
            padding: 8px;
        }
    }

    .empty-space {
        height: 30px; /* 設定空白區域的高度 */
    }

    /* Footer樣式 */
    footer {
        background-color: #4CAF50;
        color: white;
        text-align: center;
        padding: 15px 0;
        position: relative;
        bottom: 0;
        width: 100%;
    }

    footer a {
        color: #fff;
        text-decoration: none;
        font-size: 20px;
    }

    footer a:hover {
        text-decoration: underline;
    }

    /* 浮動按鈕樣式 */
    .floating-btn {
        position: fixed;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 12px 24px; /* 改為長方形的按鈕 */
        font-size: 16px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        transition: background-color 0.3s;
        text-align: center;
        writing-mode: vertical-rl; /* 使文字垂直排列 */
    }

    .floating-btn:hover {
        background-color: #45a049;
    }
</style>