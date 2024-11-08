<html>
    <head>
        <title>勞工生活與就業狀況調查</title>
    </head>
    <body>
        <h1>勞工生活與就業狀況調查</h1>
    </body>
    <table border = '1'>
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
    </table>
</html>