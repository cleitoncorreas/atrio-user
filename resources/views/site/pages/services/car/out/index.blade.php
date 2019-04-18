@extends('vendor.templates.page')
@section('background','gradient-45deg-indigo-purple')

<!------------------------------------------------------------------------------------------>

<!--@@section('button-visibility','hidden')-->
@section('button-return-color','gradient-45deg-purple-deep-orange')
@section('button-return-href','/services/car')

<!------------------------------------------------------------------------------------------>

@section('logo-avatar', './../../img/logo-menu/question-driver.png')
@section('title-grid', 'Será o motorista?')
@section('title-color','purple')
@section('subtitle-grid', 'selecione uma das opções abaixo')

<!------------------------------------------------------------------------------------------>

@section('button-option1-href','out/driver/yes')
@section('button-option1-color','gradient-45deg-purple-deep-orange')
@section('button-option1-name','Sim')

<!------------------------------------------------------------------------------------------>

@section('button-option2-href','out/driver/no')
@section('button-option2-color','gradient-45deg-purple-deep-orange')
@section('button-option2-name','Não')

@section('gedgets')
    @include('vendor.templates.gedgets.button',['button'=>2])
@stop