@extends('vendor.templates.page',['option' => '5'])
@section('background','gradient-45deg-indigo-purple')

<!--@@section('button-visibility','hidden')-->
@section('button-return-color','gradient-45deg-purple-deep-orange')
@section('title-color','purple')

@if(Session::get('driverYn')=='yes')

    @section('button-return-href','../../out')

@else 

    @section('button-return-href','../list/drivers')

@endif

@section('logo-avatar', './../../../../img/logo-menu/cars.png')
@section('title-grid', 'Veículos')
@section('subtitle-grid', 'Selecione o veículo desejado')

<!--@@section('carousel-image','')-->
@section('card-content-color','gradient-45deg-purple-deep-orange')
@section('button-prev-next-color','gradient-45deg-purple-deep-orange')
@section('form-action','car/select')
@section('form-input-name','id_veiculo')
@section('button-select-color','gradient-45deg-purple-deep-orange')

@section('gedgets')
    @include('vendor.templates.gedgets.carousel')
@stop
