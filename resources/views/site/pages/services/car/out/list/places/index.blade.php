@extends('vendor.templates.page',['option' => '5'])
@section('background','gradient-45deg-indigo-purple')

<!--@@section('button-visibility','hidden')-->
@section('button-return-color','gradient-45deg-purple-deep-orange')
@section('button-return-href','../list/cars')

@section('logo-avatar', './../../../../../public/img/logo-menu/places.png')
@section('title-grid', 'Localidades')
@section('title-color','purple')
@section('subtitle-grid', 'selecione a localidade desejada')

<!--@@section('carousel-image','')-->
@section('card-content-color','gradient-45deg-purple-deep-orange')
@section('button-prev-next-color','gradient-45deg-purple-deep-orange')
@section('form-action','place/select')
@section('form-input-name','id_localidade')
@section('button-select-color','gradient-45deg-purple-deep-orange')

@section('gedgets')
    @include('vendor.templates.gedgets.carousel')
@stop

