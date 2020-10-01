@extends('vendor.templates.page',['option' => '7'])
@section('background','gradient-45deg-indigo-purple')

@section('button-return-visibility','hidden')

@section('logo-avatar', './../../../../public/img/logo-menu/receipt.png')
@section('title-grid', 'Comprovante')
@section('title-color','purple')
@section('subtitle-grid', 'Apresente na garagem ')

@section('gedgets')

<div class="row offset-s2 mb-3" style="padding-left:30px; padding-right:30px">
    <div id="div-print" class="card-panel col s12 lime accent-1 z-depth-3 black-text">
        <div class="center">
            <p style="text-align: center"><b><font size="4" face="Courier">GARAGEM GRANDE RIO</font></b></p>
        </div>
        <div class="center">
            <p style="text-align: center"><font size="2" face="Courier">COMPROVANTE DE REGISTRO DE RETIRADA DE VEÍCULOS</font></p>
        </div>
        <div style="text-align: center" class="center">
            <p class="margin">
                <font size="2" face="Courier">
                    EMISSOR: {{ mb_strtoupper(str_pad(' ' . Session::get('user'),47,".",STR_PAD_LEFT)) }}
                </font>
            </p>
            <p class="margin">
                <font size="2" face="Courier">
                    SERVIÇO: {{ mb_strtoupper(str_pad(' ' . Session::get('status'),49,".",STR_PAD_LEFT)) }}
                </font>
            </p>
            <!--<p class="margin">
                <font size="2" face="Courier">
                    SERVIÇO: {{ mb_strtoupper(str_pad(' ' . Session::get('service'),48,".",STR_PAD_LEFT)) }}
                </font>
            </p>-->
            <p class="margin">
                <font size="2" face="Courier">
                    MOTORISTA: {{ mb_strtoupper(str_pad(' ' . Session::get('driver'),45,".",STR_PAD_LEFT)) }}
                </font>
            </p>
            <p class="margin">
                <font size="2" face="Courier">
                    @php $car = ' ' . Session::get('car') . ' - ' . Session::get('placa_car') @endphp
                    VEÍCULO: {{ mb_strtoupper(str_pad($car,47,".",STR_PAD_LEFT)) }}
                </font>
            </p>
            <p class="margin">
                <font size="2" face="Courier">
                    @php $place = ' ' . Session::get('place') . ' - ' . Session::get('bairro') . ' / ' . Session::get('city') @endphp
                    DESTINO: {{ mb_strtoupper(str_pad($place,47,".",STR_PAD_LEFT)) }}
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

@stop

