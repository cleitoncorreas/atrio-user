@extends('vendor.templates.page',['option' => '2'])
@section('background','gradient-45deg-green-teal')

<!------------------------------------------------------------------------------------------>

<!--@@section('button-visibility','hidden')-->
@section('button-return-color','gradient-45deg-cyan-light-green')
@section('button-return-href','/services')

<!------------------------------------------------------------------------------------------>

@section('logo-avatar', './../img/logo-menu/key.png')
@section('title-grid', 'Chaves')
@section('title-color','teal')
@section('subtitle-grid', 'selecione a opção desejada')

<!------------------------------------------------------------------------------------------>

@section('button-option1-href','car/out')
@section('button-option1-color','gradient-45deg-cyan-light-green')
@section('button-option1-name','Retirar')

<!------------------------------------------------------------------------------------------>

@section('button-option2-href','car/in')
@section('button-option2-color','gradient-45deg-cyan-light-green')
@section('button-option2-name','Devolver')