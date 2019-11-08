@extends('vendor.templates.page')
@section('background','gradient-45deg-indigo-purple')

<!------------------------------------------------------------------------------------------>

<!--@@section('button-visibility','hidden')-->
@section('button-return-color','gradient-45deg-purple-deep-orange')
@section('button-return-href','../car')

<!------------------------------------------------------------------------------------------>

@section('logo-avatar', './../../../public/img/logo-menu/out.png')
@section('title-grid', 'Devolução')
@section('title-color','purple')
@section('subtitle-grid', 'encerre suas saídas de veiculos')

@section('gedgets')
    @include('vendor.templates.gedgets.list')
@stop