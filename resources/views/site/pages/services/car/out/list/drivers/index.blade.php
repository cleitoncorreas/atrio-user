@extends('vendor.templates.page',['option' => '5'])
@section('background','gradient-45deg-indigo-purple')

<!--@@section('button-visibility','hidden')-->
@section('button-return-color','gradient-45deg-purple-deep-orange')
@section('button-return-href','/services/car/out')

@section('logo-avatar', './../../../../img/logo-menu/drivers.png')
@section('title-grid', 'Motoristas')
@section('title-color','purple')
@section('subtitle-grid', 'Selecione o motorista abaixo')

<!--@@section('carousel-image','')-->
@section('card-content-color','gradient-45deg-purple-deep-orange')
@section('button-prev-next-color','gradient-45deg-purple-deep-orange')
@section('form-action','driver/select')
@section('form-input-name','id_motorista')
@section('button-select-color','gradient-45deg-purple-deep-orange')