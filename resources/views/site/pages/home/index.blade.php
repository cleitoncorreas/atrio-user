@extends('vendor.templates.page',['option' => '1'])
@section('button-reset-visibility','hidden')
<!------------------------------------------------------------------------------------------>

@section('button-return-visibility','hidden')
<!--@@section('button-return-color','')-->
<!--@@section('button-return-href','')-->

<!------------------------------------------------------------------------------------------>

<!--@@section('logo-avatar', './img/logo-menu/logo.png')-->
@section('title-grid', config('atrio.title'))
@section('subtitle-grid', 'Controle de Portaria')

<!------------------------------------------------------------------------------------------>

@section('button-option1-href','option-login')
<!--@@section('button-option1.1-color','gradient-45deg-purple-deep-orange')-->
@section('button-option1-name','Iniciar')