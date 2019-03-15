<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Título Opcional</title>
 
        <!--Custon CSS (está em /public/assets/site/css/certificate.css)-->
    </head>
    <body>
        <div  style="text-align: center" class="row col s12">
            <div id="div-print" class="card-panel lime accent-1">
                <div style="text-align: center">
                    <p><b><font size="4" face="Courier">LEGIÃO DA BOA VONTADE</font></b></p>
                </div>
                <div style="text-align: center">
                    <p><font size="2" face="Courier">COMPROVANTE DE REGISTRO DE RETIRADA DE VEÍCULOS</font></p>
                </div>
                <div class="center">
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
                <div class="center">
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
                <div>
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
            </div>
        </div>
    </body>
</html>