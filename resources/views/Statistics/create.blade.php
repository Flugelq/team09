@extends('Statistics.index')
@section('List')
@include('message.list')
{!! Form::open(['url' => 'SurveyStatistics/store']) !!}
    @include('Statistics.from', ['submitButtonText'=>"新增調查資料"])
{!! Form::close() !!}

@endsection