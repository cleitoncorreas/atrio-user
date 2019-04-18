@extends('vendor.templates.page')

<!------------------------------------------------------------------------------------------>

@section('css')
    <link href="{{asset('./css/toast.css')}}" type="text/css" rel="stylesheet">
@stop

<!--@@section('button-visibility','hidden')-->
<!--@@section('button-return-color','')-->
@section('button-return-href','login/out')

<!------------------------------------------------------------------------------------------>

@section('logo-avatar', './img/logo-menu/concierge.png')
@section('title-grid', 'Como posso ajudar?')
@section('subtitle-grid', 'selecione o serviço desejado')

<!------------------------------------------------------------------------------------------>

@section('button-option1-href','services/key')
@section('button-option1-color','gradient-45deg-green-teal')
@section('button-option1-name','Chaves')

<!------------------------------------------------------------------------------------------>

@section('button-option2-href','services/correspondence')
@section('button-option2-color','gradient-45deg-amber-amber')
@section('button-option2-name','Correspondência')

<!------------------------------------------------------------------------------------------>

@section('button-option3-href','services/car')
@section('button-option3-color','gradient-45deg-purple-deep-orange')
@section('button-option3-name','Veículos')

<!------------------------------------------------------------------------------------------>

@section('gedgets')
    @include('vendor.templates.gedgets.button',['button'=>3])
@stop