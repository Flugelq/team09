@extends('Statistics.app')
@section('usaki')

<div class="container">
    @auth
        <a href={{ route('Statistics.create') }} >新增調查資料</a>
    @endauth
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
                    <td><a class="btnList" href= "{{ route('Statistics.show', ['id' => $statis->id ]) }}">顯示</a></td>
                    @can('admin')
                    <td><a class="btnList" href= "{{ route('Statistics.edit', ['id' => $statis->id ]) }}">修改</a></td>
                    <td>
                        <form action="{{ url('/SurveyStatistcs/delete', ['id' => $statis->id]) }}" method="post">
                            <input class="btnList" type="submit" value="刪除" />
                            @method('delete')
                            @csrf
                        </form>
                    </td>
                    @elsecan('manager')
                    <td><a class="btnList" href= "{{ route('Statistics.edit', ['id' => $statis->id ]) }}">修改</a></td>
                    @endcan
                </tr>
            @endforeach
        </tbody>
    </table>

    </div>
    
    @endforeach
</div>

@endsection