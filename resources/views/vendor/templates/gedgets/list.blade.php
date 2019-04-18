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
    
    <div class="card scrollspy border-radius-10 fixed-width z-depth-3 mb-10" data-action="reload">
        <div class="card-content p-0">
            <br>
            <br>
                <ul class="container collection" style="max-height: 262px">
                    @foreach ($lists as $key => $line)
                        <li class="collection-item animate fadeUp delay-{{ $key }} avatar">
                            <img src="./../../../../img/cars/{{ $line->veiculo->foto }}" alt="" class="circle z-depth-0 responsive-img avatar mt-3" style=" z-index: 0; border-radius:50%;border:2px solid black;">
                            <img src="./../../../../img/drivers/{{ $line->motorista->foto }}" alt="" class="circle z-depth-0 responsive-img avatar mt-2 ml-4" style=" z-index: 1;width: 50px;height:50px; border-radius:50%;border:2px solid black;">
                            <img src="./../../../../img/places/{{ $line->localidade->foto }}" alt="" class="circle z-depth-0 responsive-img avatar mt-3 ml-9" style=" z-index: 0; border-radius:50%;border:2px solid black;">
                            <span class="title ml-10 flow-text">Local: {{ $line->localidade->sigla }} | {{ ucwords(strtolower($line->localidade->bairro)) }}</span>
                            <p class="ml-10 ">Veiculo: {{ $line->veiculo->modelo }} | {{ $line->veiculo->placa }} <br>
                                Motorista: {{ ucwords(strtolower($line->motorista->funcionario->nome)) }}
                            </p>
                            <a href="{{ route('services.car.in.quiz',$line->id) }}" class="secondary-content mt-3"><i class="fas fa-share-square purple-text" style="font-size:25px"></i></a>
                        </li>
                    @endforeach
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