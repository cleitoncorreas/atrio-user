@extends('vendor.templates.page',['option' => '2'])
@section('background','gradient-45deg-indigo-purple')

<!------------------------------------------------------------------------------------------>

<!--@@section('button-visibility','hidden')-->
@section('button-return-color','gradient-45deg-purple-deep-orange')
@section('button-return-href','/services/car/in')

<!------------------------------------------------------------------------------------------>

@section('logo-avatar', './../../../../img/logo-menu/finish.png')
@section('title-grid', 'Parabéns!')
@section('title-color','purple')
@section('subtitle-grid', 'registro realizado com sucesso')

<!------------------------------------------------------------------------------------------>

@section('button-option1-href','/services/car/in')
@section('button-option1-color','gradient-45deg-purple-deep-orange')
@section('button-option1-name','Voltar para eventos')

<!------------------------------------------------------------------------------------------>

@section('button-option2-href','login/out')
@section('button-option2-color','gradient-45deg-purple-deep-orange')
@section('button-option2-name','Encerrar')