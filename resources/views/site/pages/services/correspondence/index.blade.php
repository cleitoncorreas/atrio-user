@extends('vendor.templates.page',['option' => '2'])
@section('background','gradient-45deg-amber-amber')

<!------------------------------------------------------------------------------------------>

<!--@@section('button-visibility','hidden')-->
@section('button-return-color','gradient-45deg-amber-amber')
@section('button-return-href','/services')

<!------------------------------------------------------------------------------------------>

@section('logo-avatar', './../img/logo-menu/mailbox.png')
@section('title-grid', 'Correspondência')
@section('title-color','grey')
@section('subtitle-grid', 'selecione a opção desejada')

<!------------------------------------------------------------------------------------------>

@section('button-option1-href','car/out')
@section('button-option1-color','gradient-45deg-amber-amber')
@section('button-option1-name','Retirar')

<!------------------------------------------------------------------------------------------>

@section('button-option2-href','car/in')
@section('button-option2-color','gradient-45deg-amber-amber')
@section('button-option2-name','Devolver')
