@extends('Statistics.index')
@section('List')
@include('message.list')
{!!Form::model($statis, ['method'=>'PATCH','action'=>['\App\Http\Controllers\SurveyStatisticsController@update', $statis->id]])!!}
    @include('Statistics.from', ['submitbuttonText'=>'修改調查資料'])
{!! Form::close() !!}

@endsection