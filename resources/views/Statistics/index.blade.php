<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>勞工生活及就業狀況調查</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- 引入Font Awesome圖標 -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #2c3e50;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .category-group {
            caret-color: transparent;
            margin-bottom: 30px;
        }

        .category-title {
            caret-color: transparent;
            font-size: 24px;
            color: #2c3e50;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #ecf0f1;
            border-radius: 6px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: white;
            cursor: pointer;
        }

        th:hover {
            background-color: #2980b9;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .btn-sort {
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .btn-sort i {
            margin-left: 8px;
        }

        .search-container {
            margin: 20px 0;
            text-align: right;
        }

        .search-container input {
            padding: 8px;
            font-size: 14px;
            width: 200px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        
        table td, table th {
            caret-color: transparent;
        }
    </style>
</head>
<body>

    <h1>勞工生活及就業狀況調查</h1>

    <div class="container">
        <div class="search-container">
            <input type="text" id="search" placeholder="搜尋細項..." onkeyup="searchTable()">
        </div>
        @foreach ($Statistic->groupBy('category') as $category => $group)
            <!-- 每個「統計項目別」的分組 -->
            <div class="category-group">
                <div class="category-title">{{ $category }}</div>
                <table id="table-{{ $loop->index }}">
                    <thead>
                        <tr>
                            <th>細項 <span class="btn-sort" onclick="sortTable(0, '{{ $loop->index }}')"><i class="fas fa-sort"></i></span></th>
                            <th>樣本數（人）<span class="btn-sort" onclick="sortTable(1, '{{ $loop->index }}')"><i class="fas fa-sort"></i></span></th>
                            <th>很滿意（%）<span class="btn-sort" onclick="sortTable(2, '{{ $loop->index }}')"><i class="fas fa-sort"></i></span></th>
                            <th>滿意（%）<span class="btn-sort" onclick="sortTable(3, '{{ $loop->index }}')"><i class="fas fa-sort"></i></span></th>
                            <th>普通（%）<span class="btn-sort" onclick="sortTable(4, '{{ $loop->index }}')"><i class="fas fa-sort"></i></span></th>
                            <th>不滿意（%）<span class="btn-sort" onclick="sortTable(5, '{{ $loop->index }}')"><i class="fas fa-sort"></i></span></th>
                            <th>很不滿意（%）<span class="btn-sort" onclick="sortTable(6, '{{ $loop->index }}')"><i class="fas fa-sort"></i></span></th>
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

    <script>
        // 排序表格功能
        function sortTable(columnIndex, tableIndex) {
            var table = document.getElementById('table-' + tableIndex);
            var rows = Array.from(table.rows).slice(1); // 排除表頭
            var isAscending = table.querySelectorAll('th')[columnIndex].classList.contains('asc');

            rows.sort(function(a, b) {
                var cellA = a.cells[columnIndex].innerText.trim();
                var cellB = b.cells[columnIndex].innerText.trim();

                // 處理數字排序
                if (!isNaN(cellA) && !isNaN(cellB)) {
                    return isAscending ? cellA - cellB : cellB - cellA;
                }

                // 處理字串排序
                return isAscending ? cellA.localeCompare(cellB) : cellB.localeCompare(cellA);
            });

            // 重新填充表格行
            rows.forEach(function(row) {
                table.appendChild(row);
            });

            // 切換排序狀態
            table.querySelectorAll('th').forEach(function(th) {
                th.classList.remove('asc');
                th.classList.remove('desc');
            });

            table.querySelectorAll('th')[columnIndex].classList.add(isAscending ? 'desc' : 'asc');
        }

        // 搜索表格中的細項
        function searchTable() {
            var input = document.getElementById('search');
            var filter = input.value.toLowerCase();
            var tables = document.querySelectorAll('table');

            tables.forEach(function(table) {
                var rows = table.querySelectorAll('tbody tr');
                rows.forEach(function(row) {
                    var text = row.querySelector('td').innerText.toLowerCase();
                    if (text.indexOf(filter) > -1) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        }
    </script>

</body>
</html>
