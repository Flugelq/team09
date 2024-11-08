<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>勞工生活及就業狀況調查</title>
    <style>
        /* 全局樣式 */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            color: #333;
        }

        h1 {
            background-color: #0056b3;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin: 0;
        }

        /* 內容區域 */
        .container {
            width: 90%;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ccc;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* 表格文字顏色 */
        td {
            color: #555;
        }

        /* 表格數字樣式 */
        td, th {
            font-size: 14px;
            text-align: center;
        }

        /* 字體加粗 */
        th {
            font-weight: bold;
        }

        /* 樣式對齊 */
        .table-header {
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>勞工生活及就業狀況調查</h1>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>統計項目別</th>
                    <th>細項</th>
                    <th>樣本數（人）</th>
                    <th>很滿意（%）</th>
                    <th>滿意（%）</th>
                    <th>普通（%）</th>
                    <th>不滿意（%）</th>
                    <th>很不滿意（%）</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Statistic as $statis)
                    <tr>
                        <td>{{ $statis->category}}</td>
                        <td>{{ $statis->subcategory}}</td>
                        <td>{{ $statis->sample_size}}</td>
                        <td>{{ $statis->very_satisfied_pct}}</td>
                        <td>{{ $statis->satisfied_pct}}</td>
                        <td>{{ $statis->neutral_pct}}</td>
                        <td>{{ $statis->dissatisfied_pct}}</td>
                        <td>{{ $statis->very_dissatisfied_pct}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>

