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