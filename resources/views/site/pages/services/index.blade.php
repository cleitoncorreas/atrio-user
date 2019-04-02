@extends('vendor.templates.page',['option' => '3'])

<!------------------------------------------------------------------------------------------>

<!--@@section('button-visibility','hidden')-->
<!--@@section('button-return-color','')-->
@section('button-return-href','login/out')

<!------------------------------------------------------------------------------------------>

@section('logo-avatar', './img/logo-menu/concierge.png')
@section('title-grid', 'Como posso ajudar?')
@section('subtitle-grid', 'selecione o serviço desejado')

<!------------------------------------------------------------------------------------------>

@section('button-option1-href','services/key')
@section('button-option1-color','gradient-45deg-cyan-light-green')
@section('button-option1-name','Chaves')

<!------------------------------------------------------------------------------------------>

@section('button-option2-href','services/correspondence')
@section('button-option2-color','gradient-45deg-amber-amber')
@section('button-option2-name','Correspondência')

<!------------------------------------------------------------------------------------------>

@section('button-option3-href','services/car')
@section('button-option3-color','gradient-45deg-purple-deep-orange')
@section('button-option3-name','Veículos')