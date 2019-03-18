@extends('vendor.templates.page',['option' => '6'])
@section('background','gradient-45deg-indigo-purple')

<!--@@section('button-visibility','hidden')-->
@section('button-return-color','gradient-45deg-purple-deep-orange')
@section('button-return-href','/services/car/out/list/places')

@section('logo-avatar', './../../../../img/logo-menu/summary2.png')
@section('title-grid', 'Você confirma?')
@section('title-color','purple')
@section('subtitle-grid', 'resumo das informações selecionadas')

@section('button-summary-login-href','')
@section('button-summary-login-color','gradient-45deg-blue-grey-blue-grey')
@section('button-summary-service-href',''/*'/services'*/)
@section('button-summary-service-color','gradient-45deg-blue-grey-blue-grey')
@section('button-summary-status-href',''/*'/services/car'*/)
@section('button-summary-status-color','gradient-45deg-blue-grey-blue-grey')
@section('button-summary-driver-href','/services/car/out/list/drivers')
@section('button-summary-driver-color','gradient-45deg-purple-deep-orange')
@section('button-summary-car-href','/services/car/out/list/cars')
@section('button-summary-car-color','gradient-45deg-purple-deep-orange')
@section('button-summary-place-href','/services/car/out/list/places')
@section('button-summary-place-color','gradient-45deg-purple-deep-orange')

@section('button-summary-confirm-action','/services/car/out/summary/confirm')
@section('button-summary-confirm-color','gradient-45deg-purple-deep-orange')

@section('js')
    <script>    
    
        document.addEventListener("DOMContentLoaded", function(){
        $('.preloader-background').delay(1700).fadeOut('slow');
        
        $('.preloader-wrapper')
            .delay(1700)
            .fadeOut();
        });    
    
    </script>
@stop