@extends('vendor.templates.page',['option' => ''])
@section('background','gradient-45deg-green-teal')

<!------------------------------------------------------------------------------------------>

<!--@@section('button-visibility','hidden')-->
@section('button-return-color','gradient-45deg-cyan-light-green')
@section('button-return-href','/services/key/out')

<!------------------------------------------------------------------------------------------>

@section('logo-avatar', './../../../img/logo-menu/key.png')
@section('title-grid', 'Código da Chave')
@section('title-color','teal')
@section('subtitle-grid', 'digite o código da chave')

<!------------------------------------------------------------------------------------------>

@section('option')

<style>
    /*
    * utilizando class + position
    */
    #box_icone_busca{
      width: 30px;
      height: 30px;
      padding: 10px;
      position: relative;
      left: -30px;
      top: 1px;
    }
    #icone_busca {
      color: rgba(0, 0, 0, 0.65);;
    }
    </style>
  
    <form  name="form" class="browser-default" action="{{ route('login.in')}}" method="post">
        {{ csrf_token() }}
          
        <link href="{{asset('./css/google-input.css')}}" type="text/css" rel="stylesheet">
  
    
            <div class="browser-default row center">
                <div class="browser-default label-float"> 
                    <input  placeholder=" " id="user" class="browser-default teste" autocomplete="off" name="username" type="text" value="" maxlength="6">
                    <!--<label id="user" for="username"  style="font-size: 20px"><span style="color:red">*</span> CPF</label>-->
                    <label class="browser-default">CPF (6 primeiros digitos)</label>
                </div>
            </div>
            
    
    <style>
            
    #toast {
        visibility: hidden;
        max-width: 50px;
        height: 50px;
        /*margin-left: -125px;*/
        margin: auto;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 25px;
        
        position: fixed;
        z-index: 999;
        left: 0;right:0;
        bottom: 32px;
        font-size: 17px;
        white-space: nowrap;
        overflow: hidden;
    }
    #toast #img {
        width: 50px;
        height: 50px;
        
        float: left;
    
        padding-top: 11px;
        padding-bottom: 30px;
        
        box-sizing: border-box;
    
        background-color: #2196f3;
        color: #fff;
        border-radius: 25px;
    
    }
    #toast #desc{
        
        color: #fff;
        padding: 16px;
        padding-top: 11px;
        
        overflow: hidden;
        white-space: nowrap;
    
    }
    
    #toast.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 4s, fadeout 0.5s 4.5s;
    }
    
    @-webkit-keyframes fadein {
        from {bottom: 0; opacity: 0;} 
        to {bottom: 30px; opacity: 1;}
    }
    
    @keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
    }
    
    @-webkit-keyframes expand {
        from {min-width: 50px} 
        to {min-width: 350px;}
    }
    
    @keyframes expand {
        from {min-width: 50px}
        to {min-width: 350px;}
    }
    @-webkit-keyframes stay {
        from {min-width: 350px} 
        to {min-width: 350px}
    }
    
    @keyframes stay {
        from {min-width: 350px}
        to {min-width: 350px}
    }
    @-webkit-keyframes shrink {
        from {min-width: 350px;} 
        to {min-width: 50px;}
    }
    
    @keyframes shrink {
        from {min-width: 350px;} 
        to {min-width: 50px;}
    }
    
    @-webkit-keyframes fadeout {
        from {bottom: 30px; opacity: 1;} 
        to {bottom: 60px; opacity: 0;}
    }
    
    @keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 60px; opacity: 0;}
    }    
    </style>
            
    
            @if (Session::has('alert-danger'))
                <div id="toast">
                    <div id="img" class="gradient-45deg-red-pink">
                        <i class="fas fa-user-times style="font-size:30px"></i>
                    </div>
                    <div id="desc"><span>{{ session('alert-danger') }}</span></div>
                </div>
             @endif
    
             @include('vendor.templates.gedgets.keyboardNumber')
        <!--</div>-->
    </form>

@stop