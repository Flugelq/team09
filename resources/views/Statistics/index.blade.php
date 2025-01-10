<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @guest
        @if (Route::has('login'))
            <ul class="button-list">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </ul>
        @endif
        
        @if (Route::has('register'))
            <ul class="button-list">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </ul>
        @endif
    @else
        <ul class="button-list">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
        </ul>

        <ul class="button-list" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    @endguest
    <title>勞工生活與就業狀況調查</title>
    @include('Statistics.style')
</head>
<body>

<h1>勞工生活與就業狀況調查</h1>
<a href={{route('Statistics.create')}} class="floating-btn" onclick="showAlert()">
    新增調查資料
</a>
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