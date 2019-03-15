@extends('vendor.templates.page',['option' => '2'])
@section('background','gradient-45deg-indigo-purple')

<!------------------------------------------------------------------------------------------>

<!--@@section('button-visibility','hidden')-->
@section('button-return-color','gradient-45deg-purple-deep-orange')
@section('button-return-href','/services')

<!------------------------------------------------------------------------------------------>

@section('logo-avatar', './../img/logo-menu/parking.png')
@section('title-grid', 'Saída / Entrada')
@section('title-color','purple')
@section('subtitle-grid', 'selecione a opção desejada')

<!------------------------------------------------------------------------------------------>

@section('button-option1-href','car/out')
@section('button-option1-color','gradient-45deg-purple-deep-orange')
@section('button-option1-name','Retirar')

<!------------------------------------------------------------------------------------------>

@section('button-option2-href','car/in')
@section('button-option2-color','gradient-45deg-purple-deep-orange')
@section('button-option2-name','Devolver')