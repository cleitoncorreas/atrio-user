@extends('vendor.templates.page',['option' => '2'])
@section('background','gradient-45deg-cyan-light-green')

<!------------------------------------------------------------------------------------------>

<!--@@section('button-visibility','hidden')-->
@section('button-return-color','gradient-45deg-green-teal')
@section('button-return-href','/services/key')

<!------------------------------------------------------------------------------------------>

@section('logo-avatar', './../../img/logo-menu/key.png')
@section('title-grid', 'Como deseja localizar?')
@section('title-color','teal')
@section('subtitle-grid', 'selecione a opção desejada')

<!------------------------------------------------------------------------------------------>

@section('button-option1-href','out/code')
@section('button-option1-color','gradient-45deg-green-teal')
@section('button-option1-name','código da chave')

<!------------------------------------------------------------------------------------------>

@section('button-option2-href','out/floor')
@section('button-option2-color','gradient-45deg-green-teal')
@section('button-option2-name','filtro por etapas')
