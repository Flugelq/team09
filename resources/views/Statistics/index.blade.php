<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>勞工生活與就業狀況調查</title>
    <style>
        /* 全局樣式 */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
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
    </style>
</head>
<body>

<h1>勞工生活與就業狀況調查</h1>

<table id="surveyTable">
    <thead>
        <tr>
            <th onclick="sortTable(0)">分類</th>
            <th onclick="sortTable(1)">子分類</th>
            <th onclick="sortTable(2)">樣本數</th>
            <th onclick="sortTable(3)">非常滿意%</th>
            <th onclick="sortTable(4)">滿意%</th>
            <th onclick="sortTable(5)">中立%</th>
            <th onclick="sortTable(6)">不滿意%</th>
            <th onclick="sortTable(7)">非常不滿意%</th>
        </tr>
    </thead>
    <tbody>
        <!-- 以下是範例數據 -->
        @foreach ($Statistic as $statis)
        <tr>
            <td>{{$statis->category}}</td>
            <td>{{$statis->subcategory}}</td>
            <td>{{$statis->sample_size}}</td>
            <td>{{$statis->very_satisfied_pct}}</td>
            <td>{{$statis->satisfied_pct}}</td>
            <td>{{$statis->neutral_pct}}</td>
            <td>{{$statis->dissatisfied_pct}}</td>
            <td>{{$statis->very_dissatisfied_pct}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    // 排序功能
    function sortTable(columnIndex) {
        const table = document.getElementById("surveyTable");
        const rows = Array.from(table.rows).slice(1); // 取得表格的所有列（去掉表頭）
        const isAscending = table.rows[0].cells[columnIndex].getAttribute("data-sort-order") === "asc";
        
        rows.sort((rowA, rowB) => {
            const cellA = rowA.cells[columnIndex].innerText.trim();
            const cellB = rowB.cells[columnIndex].innerText.trim();
            
            if (!isNaN(cellA) && !isNaN(cellB)) {
                return isAscending ? cellA - cellB : cellB - cellA; // 處理數字排序
            } else {
                return isAscending ? cellA.localeCompare(cellB) : cellB.localeCompare(cellA); // 處理字母排序
            }
        });

        // 根據排序方向進行升降排序
        rows.forEach(row => table.appendChild(row));
        table.rows[0].cells[columnIndex].setAttribute("data-sort-order", isAscending ? "desc" : "asc");
    }
</script>

</body>
</html>