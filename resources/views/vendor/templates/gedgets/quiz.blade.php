<style>
    .switch label input[type=checkbox]:checked+.lever:after {
        background-color: purple !important;
    }
    .switch label input[type=checkbox]:checked+.lever {
        background-color: orchid !important;
    }
    </style>
    <form action="{{ route('services.car.in.quiz.post') }}" method="post">
        {{ csrf_field() }}
        <div class="card scrollspy border-radius-10 fixed-width z-depth-3 mb-5" data-action="reload">
            <div class="card-content p-0">
                <br>
                <br>
                <input type="hidden" name="id_evento" value="{{ $id_evento }}">
                <ul class="container collection" style="max-height: 340px">
                    @foreach ($lists as $key => $line)
                        <li class="collection-item animate fadeUp delay-{{ $key }} avatar">
                            <img src="./../../../../../public/img/logo-quiz/{{ $line->foto }}" alt="" class="circle z-depth-0 responsive-img avatar mt-2" style="border-radius:50%;border:2px solid black;">
                            <div class="black-text switch mt-5">{{ $line->pergunta }}
                                <label style="float: right;color:black">
                                    @if($line->padrao == 'Y')
                                        <input type="checkbox" name="lists[]" class="objeto" value="{{ $line->id }}" checked="checked">
                                    @else 
                                        <input type="checkbox" name="lists[]" class="objeto" value="{{ $line->id }}" >
                                    @endif
                                        Não
                                    <span class="lever"></span>
                                        Sim
                                </label>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <br>
                <br>
            </div>
        </div>
        <div class="col s12 center mb-5" >
                <button type="submit" class="animated zoomInDown gradient-45deg-purple-deep-orange gradient-shadow waves-effect waves-light btn border-round center">Encerrar</button>
        </div>
    </form>