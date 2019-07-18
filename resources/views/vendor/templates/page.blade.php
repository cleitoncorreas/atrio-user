@extends('vendor.templates.master')

@section('body')

    <!-- Modal Structure -->
    <div id="modal1" class="modal bottom-sheet">
        <div class="modal-content">
             @include('vendor.templates.gedgets.keyboardNumber')
        </div>
        <!--<div class="modal-footer">
           
        </div>-->
    </div>

    <div id="login-pag" class="row">
        <div class="@yield('animated-page','animated fadeInDown') col s12 z-depth-5 card-panel border-round" id="seletor">
            <div class="row">
                <div class="input-field col s12 mt-3">
                    <div class="@yield('animated-buttom-return','animated zoomIn')">
                        <a style="visibility:@yield('button-return-visibility')" href="@yield('button-return-href')" class="btn-floating @yield('button-return-color','gradient-45deg-indigo-blue') gradient-shadow btn-large waves-effect waves-light"><i class="ion-android-arrow-back"></i></a>
                    </div>
                    
                    <div class="animated pulse infinite center">
                        <img src="@yield('logo-avatar','./img/logo-menu/default.png')" alt="" class="responsive-img valign" id="ico-menu" id="seletor">
                    </div>
                  <!--<p class="center login-form-text">@yield('title-grid')</p>-->
                </div>
                <div class="animated bounce input-field col s12 center mb-5">
                    <h3 class="header center @yield('title-color','blue')-text text-darken-4 light" id="seletor">@yield('title-grid')<span style="font-size:15px">@yield('title-subgrid')</span></h3>
                    <h5 class="font-weight-100 center black-text text-darken-4 light" id="seletor">@yield('subtitle-grid')</h5>
                </div>
            </div>


            @yield('gedgets')

          
        </div>
    </div>

@stop