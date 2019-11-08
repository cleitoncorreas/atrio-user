@extends('vendor.templates.page')
@section('background','gradient-45deg-indigo-purple')

<!------------------------------------------------------------------------------------------>

<!--@@section('button-visibility','hidden')-->
@section('button-return-color','gradient-45deg-purple-deep-orange')
@section('button-return-href','../../in')

<!------------------------------------------------------------------------------------------>

@section('logo-avatar', './../../../../../public/img/logo-menu/question-login.png')
@section('title-grid', 'Questionário')
@section('title-color','purple')
@section('subtitle-grid', 'responda o questionário baixo')

@section('gedgets')
    @include('vendor.templates.gedgets.quiz')
@stop