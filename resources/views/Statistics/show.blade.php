@extends('Statistics.app')
@section('usaki')
<table id="table">
    <thead>
        <tr>
            <th>細項 <span class="btn-sort"><i class="fas fa-sort"></i></span></th>
            <th>樣本數（人）<span class="btn-sort"><i class="fas fa-sort"></i></span></th>
            <th>很滿意（%）<span class="btn-sort"><i class="fas fa-sort"></i></span></th>
            <th>滿意（%）<span class="btn-sort"><i class="fas fa-sort"></i></span></th>
            <th>普通（%）<span class="btn-sort"><i class="fas fa-sort"></i></span></th>
            <th>不滿意（%）<span class="btn-sort"><i class="fas fa-sort"></i></span></th>
            <th>很不滿意（%）<span class="btn-sort"><i class="fas fa-sort"></i></span></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $statis->subcategory }}</td>
            <td>{{ $statis->sample_size }}</td>
            <td>{{ $statis->very_satisfied_pct }}</td>
            <td>{{ $statis->satisfied_pct }}</td>
            <td>{{ $statis->neutral_pct }}</td>
            <td>{{ $statis->dissatisfied_pct }}</td>
            <td>{{ $statis->very_dissatisfied_pct }}</td>
        </tr>
    </tbody>
</table>
@endsection