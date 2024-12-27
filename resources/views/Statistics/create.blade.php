@extends('Statistics.app')
@section('title','新增勞工生活及就業狀況調查')
@section('usaki')
    @include('message.list')
{!! Form::open(['url' => 'SurveyStatistcs/store']) !!}
    @include('Statistics.form', ['submitButtonText'=>'新增調查資料'])
{!! Form::close() !!}

@endsection