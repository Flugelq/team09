@extends('Statistics.app')
@section('title','修改勞工生活及就業狀況調查')
@section('usaki')
@include('message.list')
{!! Form::model($statis, ['method'=>'PATCH','action'=>['\App\Http\Controllers\SurveyStatisticsController@update', $statis->id]]) !!}
    @include('Statistics.form', ['submitButtonText'=>'修改調查資料'])
{!! Form::close() !!}

@endsection