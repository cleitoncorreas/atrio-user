@extends('vendor.templates.master')

@section('body')

    <div id="login-pag" class="row">
        <div class="animated fadeInDown col s12 z-depth-5 card-panel border-round" id="seletor">
            <div class="row">
                <div class="input-field col s12 mt-5">
                    <div class="animated zoomIn ">
                        <a style="visibility:@yield('button-return-visibility')" href="@yield('button-return-href')" class="btn-floating @yield('button-return-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large waves-effect waves-light"><i class="material-icons">arrow_back</i></a>
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


            @switch($option)
                @case('1')
                    <div class="animated zoomIn row center col s12 mb-5">
                        <a href="@yield('button-option1-href')" class="@yield('button-option1-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">@yield('button-option1-name')<!--<i class="material-icons ml-6 left">cloud_download</i>--></a>
                    </div>
                @break

                @case('2')
                    <div class="animated zoomIn row center col s12 mb-3">
                        <a href="@yield('button-option1-href')" class="@yield('button-option1-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">@yield('button-option1-name')</a>
                    </div>
                    <div class="animated zoomIn row center col s12 mb-6">
                        <a href="@yield('button-option2-href')" class="@yield('button-option2-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">@yield('button-option2-name')</a>
                    </div>
                @break

                @case('3')
                    <div class="animated zoomIn row center col s12 mb-3">
                        <i class="material-icons teal-text" style="position: absolute; top: -7px; right:2%; z-index:2">lens</i>
                        <a href="@yield('button-option1-href')" class="@yield('button-option1-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">@yield('button-option1-name')<!--</span><span class="badge badge pill float-right mt-2 red">30</span>--></a>
                    </div>
                    <div class="animated zoomIn row center col s12 mb-3">
                        <i class="material-icons blue-text" style="position: absolute; top: -7px; right:2%; z-index:2">lens</i>
                        <a href="@yield('button-option2-href')" class="@yield('button-option2-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">@yield('button-option2-name')</a>
                    </div>
                    <div class="animated zoomIn row center col s12 mb-5">
                        <i class="material-icons orange-text" style="position: absolute; top: -7px; right:2%; z-index:2">lens</i>
                        <a href="@yield('button-option3-href')" class="@yield('button-option3-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">@yield('button-option3-name')</a>
                    </div>
                @break

                @case('4')
                    @yield('login')
                @break

                @case('5')
                    <div class="center col s12">
                        <div class="row carousel carousel-slider border-round" data-indicators="true">
                            @foreach ($lists as $line)
                                @switch($dir)
                                    @case('img\cars')
                                        <div class="col s12 carousel-item"  data-cindex="{{ $line->id }}" id="seletor">
                                            @if(file_exists(public_path($dir.'\\'.$line->foto)))
                                                <div class="card blue-grey darken-4 z-depth-5 responsive-img border-round" style="background-image:url('./../../../../{{ str_replace('\\','/',$dir) }}/{{ $line->foto }}');width: 100%;height: 100%;background-size:cover;background-position:cover;">
                                            @else 
                                                <div class="card blue-grey darken-4 z-depth-5 responsive-img border-round" style="background-image:url('./../../../../img/img-default.jpg');width: 100%;height: 100%;background-size: cover;background-position:center">
                                            @endif
                                                    <div class="animated pulse infinite input-field @yield('card-content-color','gradient-45deg-indigo-light-blue') gradient-shadow card-content card-panel col s6 z-depth-5" style="opacity:.8">
                                                        <span class="card-title font-weight-600 mb-10 white-text">{{ $line->modelo }}</span>
                                                        <p class="white-text">{{ $line->marca }}
                                                        <br> {{ $line->placa  }}</p>
                                                    </div>
                                                </div>
                                        </div>
                                    @break
                                    @case('img\drivers')
                                        <div class="col s12 carousel-item"  data-cindex="{{ $line->funcionario->id }}" id="seletor">
                                            @if(file_exists(public_path($dir.'\\'.$line->foto)))
                                                <div class="card blue-grey darken-4 z-depth-5 responsive-img border-round" style="background-image:url('./../../../../{{ str_replace('\\','/',$dir) }}/{{ $line->foto }}');width: 100%;height: 100%;background-size:cover;background-position:center;">
                                            @else 
                                                <div class="card blue-grey darken-4 z-depth-5 responsive-img border-round" style="background-image:url('./../../../../img/img-default.jpg');width: 100%;height: 100%;background-size:cover;background-position:center">
                                            @endif
                                                    <div class="center">
                                                        <div class="animated pulse infinite input-field @yield('card-content-color','gradient-45deg-indigo-light-blue') gradient-shadow card-content card-panel col s7 z-depth-5" style="opacity:.8">
                                                            <!--<img src="./../../../../{{ str_replace('\\','/',$dir) }}/{{ $line->foto }}" class="responsive-img valign profile-image-login border-round">-->
                                                            <span class="font-weight-600 mb-10 white-text">{{ $line->funcionario->nome }}</span>
                                                            <!--<p class="white-text">{{ $line->cnh }}
                                                            <br> {{ $line->validade  }}</p>-->
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                        </div>
                                    @break
                                    @case('img\places')
                                        <div class="col s12 carousel-item"  data-cindex="{{ $line->id }}" id="seletor">
                                            @if(file_exists(public_path($dir.'\\'.$line->foto)))
                                        <div class="card blue-grey darken-4 z-depth-5 responsive-img border-round" style="background-image:url('./../../../../{{ str_replace('\\','/',$dir) }}/{{ $line->foto }}');width: 100%;height: 100%;background-size:cover;background-position:center;">
                                            @else 
                                                <div class="card blue-grey darken-4 z-depth-5 responsive-img border-round" style="background-image:url('./../../../../img/img-default.jpg');width: 100%;height: 100%;background-size:cover;background-position:center">
                                            @endif
                                                    <div class="animated pulse infinite input-field @yield('card-content-color','gradient-45deg-indigo-light-blue') gradient-shadow card-content card-panel col s6 z-depth-5" style="opacity:.8">
                                                        <span class="font-weight-600 mb-10 white-text">{{ $line->descricao }}</span>
                                                        <p class="white-text">{{ $line->endereco }}
                                                        <br> {{ $line->telefone  }}</p>
                                                    </div>
                                                </div>
                                        </div>
                                    @break
                                @endswitch
                            @endforeach
                        </div>

                        <a class="btn-floating  @yield('button-prev-next-color','gradient-45deg-indigo-light-blue') gradient-shadow waves-effect waves-light left prev" style="bottom:100px; margin: 20px"><i class="material-icons">arrow_back</i></a>
                        <a class="btn-floating  @yield('button-prev-next-color','gradient-45deg-indigo-light-blue') gradient-shadow waves-effect waves-light right next" style="bottom:100px; margin: 20px"><i class="material-icons">arrow_forward</i></a>
                        
                        <form action="@yield('form-action')" method="post">
                        {{ csrf_field() }}
                            <div class="mt-5">
                                <input type="hidden" name="@yield('form-input-name')" class="id">
                                <button  type="submit" class="animated zoomIn @yield('button-select-color','gradient-45deg-indigo-light-blue') gradient-shadow waves-effect waves-light btn border-round">Selecionar</button>
                            </div>
                        </form>
                    </div>

                    @section('js')
                        <script>

                            $(document).ready(function(){
                            
                            // function change
                                function changeIndex(index){
                                    $('.id').val(index);
                                }
                            
                            //active carousel
                                $('.carousel.carousel-slider').carousel({
                                    onCycleTo: function(index){
                                        changeIndex($(index).data('cindex'));
                                    }
                                });
                            
                            // function for next slide
                                $('.next').click(function(){
                                    $('.carousel').carousel('next');
                                });
                            
                            // function for prev slide
                                $('.prev').click(function(){
                                    $('.carousel').carousel('prev');
                                });
                            
                            });
                        
                        </script>
                    @stop

                @break

                @case('6')
                    <div class="row center col s12">
                        <div class="row mb-3">
                            <a href="@yield('button-summary-login-href')" class="animated zoomInDown @yield('button-summary-login-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">
                                <img src="./../../../../img/logo-menu/shield.png" width="40" height="40" style="top:11%"  class="left">{{ Session::get('user') }}
                            </a>
                        </div>
                        <div class="row mb-3">
                            <a href="@yield('button-summary-service-href')" class="animated zoomInDown @yield('button-summary-service-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">
                                <img src="./../../../../img/logo-menu/concierge.png" width="40" height="40" style="top:11%"  class="left">{{ Session::get('service') }}
                            </a>
                        </div>
                        <div class="row mb-3">
                            <a href="@yield('button-summary-status-href')" class="animated zoomInDown @yield('button-summary-status-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">
                                <img src="./../../../../img/logo-menu/parking.png" width="40" height="40" style="top:11%"  class="left">{{ Session::get('status') }}
                            </a>
                        </div>
                        <div class="row mb-3">
                            <a href="@yield('button-summary-driver-href')" class="animated zoomInDown @yield('button-summary-driver-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">
                                <img src="./../../../../img/logo-menu/driver.png" width="40" height="40" style="top:11%"  class="left">{{ Session::get('driver') }}
                            </a>
                        </div>
                        <div class="row mb-3">
                            <a href="@yield('button-summary-car-href')" class="animated zoomInDown @yield('button-summary-car-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">
                                <img src="./../../../../img/logo-menu/cars.png" width="40" height="40" style="top:11%"  class="left">{{ Session::get('car') }}
                            </a>
                        </div>
                        <div class="row mb-3">
                            <a href="@yield('button-summary-place-href')" class="animated zoomInDown @yield('button-summary-place-color','gradient-45deg-indigo-light-blue') gradient-shadow btn-large z-depth-5 waves-effect waves-light border-round col s12">
                                <img src="./../../../../img/logo-menu/places.png" width="40" height="40" style="top:11%"  class="left">{{ Session::get('place') }}
                            </a>
                            @php $page @endphp
                        </div>
                    </div>
                 
                
                    <div class="row center col s12 mb-5">
                        <form action="@yield('button-summary-confirm-action')" method="post">
                        {{ csrf_field() }}
                            <div>
                                <button  type="submit" class="@yield('button-summary-confirm-color','gradient-45deg-indigo-light-blue') waves-effect waves-light btn border-round box-shadow">Confirmar</button>
                            </div>
                        </form>
                    </div>
                @break

                @case('7')
                    <div class="row offset-s2 mb-3" style="padding-left:30px; padding-right:30px">
                        <div id="div-print" class="card-panel col s12 lime accent-1 z-depth-3 black-text">
                            <div class="center">
                                <p style="text-align: center"><b><font size="4" face="Courier">LEGIÃO DA BOA VONTADE</font></b></p>
                            </div>
                            <div class="center">
                                <p style="text-align: center"><font size="2" face="Courier">COMPROVANTE DE REGISTRO DE RETIRADA DE VEÍCULOS</font></p>
                            </div>
                            <div style="text-align: center" class="center">
                                <p class="margin">
                                    <font size="2" face="Courier">
                                        EMISSOR: {{ mb_strtoupper(str_pad(Session::get('user'),47,".",STR_PAD_LEFT)) }}
                                    </font>
                                </p>
                                <p class="margin">
                                    <font size="2" face="Courier">
                                        STATUS: {{ mb_strtoupper(str_pad(Session::get('status'),49,".",STR_PAD_LEFT)) }}
                                    </font>
                                </p>
                                <p class="margin">
                                    <font size="2" face="Courier">
                                        SERVIÇO: {{ mb_strtoupper(str_pad(Session::get('service'),48,".",STR_PAD_LEFT)) }}
                                    </font>
                                </p>
                                <p class="margin">
                                    <font size="2" face="Courier">
                                        MOTORISTA: {{ mb_strtoupper(str_pad(Session::get('driver'),45,".",STR_PAD_LEFT)) }}
                                    </font>
                                </p>
                                <p class="margin">
                                    <font size="2" face="Courier">
                                        VEÍCULO: {{ mb_strtoupper(str_pad(Session::get('car'),47,".",STR_PAD_LEFT)) }}
                                    </font>
                                </p>
                                <p class="margin">
                                    <font size="2" face="Courier">
                                        LOCALIDADE: {{ mb_strtoupper(str_pad(Session::get('place'),45,".",STR_PAD_LEFT)) }}
                                    </font>
                                </p>
                            </div>
                            <br>
                            <div style="text-align: center" class="center">
                                <p class="margin">
                                    <font size="2" face="Courier">
                                        {{ str_pad('',56,"-",STR_PAD_LEFT) }}
                                    </font>
                                </p>
                                <p class="margin">
                                    <font size="2" face="Courier">
                                        APRESENTAR COMPROVANTE NA GARAGEM
                                    </font>
                                </p>
                                <p class="margin">
                                    <font size="2" face="Courier">
                                        {{ str_pad('',56,"-",STR_PAD_LEFT) }}
                                    </font>
                                </p>
                            </div>
                            <br>
                            <br>
                            <div style="text-align: center">
                                <p class="margin center">
                                    <font size="2" face="Courier">
                                        {{ str_pad('',56,"-",STR_PAD_LEFT) }}
                                    </font>
                                </p>
                                <p class="margin center">
                                    <font size="2" face="Courier">
                                        ASSINATURA DO RESPONSÁVEL
                                    </font>
                                </p>
                            </div>
                            <br>
                        </div>
                    </div>

                    <div class="row col s12 center mb-5" style="padding-left:30px; padding-right:30px">
                            <button  onclick="PrintDiv()" class="animated zoomInDown gradient-45deg-purple-deep-orange gradient-shadow waves-effect waves-light btn border-round left">Imprimir</button>
                            <a href="{{ route('services.car.out.receipt.print') }}" class="animated zoomInDown gradient-45deg-purple-deep-orange gradient-shadow waves-effect waves-light btn border-round">Baixar</a>
                            <a href="{{ route('login.out') }}" class="animated zoomInDown gradient-45deg-purple-deep-orange gradient-shadow waves-effect waves-light btn border-round right">Encerrar</a>
                    </div>
                
                    @section('js')
                        <script>
                            function PrintDiv(div)
                            {
                                $('#div-print').printElement(/*{printMode:'popup'}*/);
                            }
                            /*function print(){
                                var conteudo = document.getElementById('div-print').innerHTML,
                                tela_impressao = window.open('about:blank');
                                tela_impressao.document.write(conteudo);
                                tela_impressao.window.print();
                                tela_impressao.window.close();
                            }*/
                        </script>
                    @stop
                    
                @break

                @case('8')

                <style>
                
                .container {
                /*position: relative;
                width: 480px;
                height: 320px;*/
                overflow: auto;
                }

                .container .content {
                /*background-image: url('https://i.imgur.com/nAUUNzH.jpg');
                width: 1280px;
                height: 720px;*/
                }
                
                </style>

                <div class="card scrollspy border-radius-10 fixed-width z-depth-3 mb-10">
                    <div class="card-content p-0">
                        <br>
                        <br>
                        <ul class="container collection" style="max-height: 262px">
                            <li class="collection-item animate fadeUp delay-1 avatar">
                                <img src="./../../../../img/cars/spacefox.png" alt="" class="circle z-depth-2 responsive-img avatar mt-3" style=" z-index: 0">
                                <img src="./../../../../img/drivers/0437000698.jpg" alt="" class="circle z-depth-2 responsive-img avatar mt-3 ml-6" style=" z-index: 1">
                                <span class="title ml-9">Emissor: Cleiton Corrêa da Silva</span>
                                <p class="ml-9">Veiculo: Space <br>
                                    Motorista: Milton Paulo
                                </p>
                                <a href="#!" class="secondary-content mt-3"><i class="ion-flag red-text" style="font-size:30px"></i></a>
                            </li>
                            <li class="collection-item animate fadeUp delay-2 avatar">
                                <img src="./../../../../img/cars/fiorino.gif" alt="" class="circle z-depth-2 responsive-img avatar mt-3">
                                <img src="./../../../../img/drivers/0432800306.jpg" alt="" class="circle z-depth-2 responsive-img avatar mt-3 ml-6" style=" z-index: 1">
                                <span class="title ml-9">Emissor: Cleiton Corrêa da Silva</span>
                                <p class="ml-9">Veiculo: Fiorino <br>
                                    Motorista: Gilmar Mendes
                                </p>
                                <a href="#!" class="secondary-content mt-3"><i class="ion-flag red-text" style="font-size:30px"></i></a>
                            </li>
                            <li class="collection-item animate fadeUp delay-3 avatar">
                                <img src="./../../../../img/cars/doblo.jpg" alt="" class="circle z-depth-2 responsive-img avatar mt-3">
                                <img src="./../../../../img/drivers/0437000804.jpg" alt="" class="circle z-depth-2 responsive-img avatar mt-3 ml-6" style=" z-index: 1">
                                <span class="title ml-9">Emissor: Cleiton Corrêa da Silva</span>
                                <p class="ml-9">Veiculo: Dòblo <br>
                                    Motorista: João Paulo
                                </p>
                                <a href="#!" class="secondary-content mt-3"><i class="ion-flag red-text" style="font-size:30px"></i></a>
                            </li>
                            <li class="collection-item animate fadeUp delay-4 avatar">
                                <img src="./../../../../img/cars/doblo.jpg" alt="" class="circle z-depth-2 responsive-img avatar mt-3">
                                <img src="./../../../../img/drivers/0432800342.jpg" alt="" class="circle z-depth-2 responsive-img avatar mt-3 ml-6" style=" z-index: 1">
                                <span class="title ml-9">Emissor: Cleiton Corrêa da Silva</span>
                                <p class="ml-9">Veiculo: Dòblo  <br>
                                    Motorista: Paulo Vitor
                                </p>
                                <a href="#!" class="secondary-content mt-3"><i class="ion-flag red-text" style="font-size:30px"></i></a>
                            </li>
                        </ul>
                        <br>
                        <br>
                    </div>
                </div>
  
                @section('js')

                <script src="./../../../../vendor/perfect-scrollbar/dist/perfect-scrollbar.js"></script>

                <script>
                
                var ps = new PerfectScrollbar('.container');

                </script>
                
                @stop

                @break

                @default

            @endswitch  
          
        </div>
    </div>

@stop