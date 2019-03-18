<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <title>@yield('title_prefix', config('atrio.title_prefix', ''))
    @yield('title', config('atrio.title', ''))
    @yield('title_postfix', config('atrio.title_postfix', ''))</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <!-- Favicons-->
    <link rel="icon" href="{{asset('./img/favico.png')}}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{asset('./img/favico.png')}}">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{{asset('./img/favico.png')}}">
    <!-- Bootstrap -->
    <!--<link rel="stylesheet" href="/managercard/bower_components/bootstrap/dist/css/bootstrap.min.css">-->
    <!-- Theme style -->
    <!--<link rel="stylesheet" href="/managercard/dist/css/AdminLTE.min.css">-->
    <!-- Ionicons -->
    <link href="{{asset('./vendor/Ionicons/css/ionicons.min.css')}}" type="text/css" rel="stylesheet">
    <!-- Theme style -->
    <!--<link rel="stylesheet" href="/managercard/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/managercard/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="/managercard/dist/css/skins/_all-skins.min.css">-->
    <!-- Bootstrap Color Picker -->
    <!--<link rel="stylesheet" href="/managercard/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">-->
    <!-- Font Awesome -->
    <link href="{{asset('./vendor/font-awesome/css/font-awesome.min.css')}}" type="text/css" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="{{asset('./css/icon.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('./css/materialize.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('./css/animate.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('./css/app-email.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('./css/style.css')}}" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <!--<link href="{{asset('./css/page-center.css')}}" type="text/css" rel="stylesheet">-->
    <link href="{{asset('./css/main.css')}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Google+Sans:400,500|Roboto:400,400italic,500,500italic,700,700italic|Roboto+Mono:400,500,700|Material+Icons">
    <!--<link rel="stylesheet" href="https://developers.google.com/_static/c68b8dc4d9/css/devsite-google-blue.css?hl=pt-br">-->
  </head>

  <style>
    h3, h5, a{
        font-family: Google Sans;
    }  
    h4{
        font-family: Roboto;
    }  
  </style>

  <body class="@yield('background','gradient-45deg-indigo-blue')" style="justify-content:center">

      <div style="bottom: 50px; right: 50px;visibility:@yield('button-reset-visibility')" class="fixed-action-btn direction-top">
        <a id="menu" href="{{ route('login.out') }}" class="btn-floating waves-effect waves-light btn-large white gradient-shadow z-depth-5"><i class="black-text fa-spin material-icons">autorenew</i></a>
      </div>

      <div class="tap-target gradient-45deg-purple-deep-orange" data-activates="menu">
        <div class="tap-target-content">
          <h5 class="white-text">Reinicia Processo</h5>
          <p class="white-text">Clique neste botão para reiniciar o processo a qualquer momento</p>
        </div>
      </div>

    @yield('body')

    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{asset('./js/jquery.js')}}"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{{asset('./js/materialize.min.js')}}"></script>
    <!-- InputMask -->
    <script src="{{asset('./js/jquery-mask/dist/jquery.mask.min.js')}}"></script>
    <!-- print element -->
    <script src="{{asset('./js/printElement-master/dist/jquery.printelement.min.js')}}"></script>

    @yield('js')

    <!--<div class="hiddendiv common"></div>-->

  </body>

</html>