<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>勞工生活與就業狀況調查</title>
    @include('Statistics.style')
</head>
<body>

<h1>勞工生活與就業狀況調查</h1>
@yield('List')
<div class="empty-space"></div>
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
@include('Statistics.footer')
</body>
</html>