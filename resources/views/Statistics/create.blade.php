@extends('Statistics.index')
@section('List')

{!! Form::open(['url' => 'SurveyStatistics/store']) !!}
    @include('Statistics.from', ['submitButtonText'=>"新增調查資料"])
{!! Form::close() !!}

@endsection