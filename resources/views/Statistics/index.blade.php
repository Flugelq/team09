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

        /* 統計項目別分組 */
        .category-group {
            margin-bottom: 30px;
        }

        .category-title {
            background-color: #007bff;
            color: white;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 4px;
        }

        /* 表格樣式 */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
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

        /* 樣式對齊 */
        .table-header {
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>勞工生活及就業狀況調查</h1>

    <div class="container">
        @foreach ($Statistic->groupBy('category') as $category => $group)
            <!-- 每個「統計項目別」的分組 -->
            <div class="category-group">
                <div class="category-title">{{ $category }}</div>
                <table>
                    <thead>
                        <tr>
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
                        @foreach ($group as $statis)
                            <tr>
                                <td>{{ $statis->subcategory }}</td>
                                <td>{{ $statis->sample_size }}</td>
                                <td>{{ $statis->very_satisfied_pct }}</td>
                                <td>{{ $statis->satisfied_pct }}</td>
                                <td>{{ $statis->neutral_pct }}</td>
                                <td>{{ $statis->dissatisfied_pct }}</td>
                                <td>{{ $statis->very_dissatisfied_pct }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>

</body>
</html>
