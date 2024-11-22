@extends('Statistics.index')
@section('List')

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

@endsection