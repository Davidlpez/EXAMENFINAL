@extends('layouts.plantilla')

@section('content')
<br> 
<div class="container">
    <div class="row justify-content-center">
    

    </div>
  </div>
</nav>
<body>
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <center> <b> Evento </b> </center> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Evento es un término que hace referencia a un hecho dado inesperadamente y modifica las circunstancias que rodean al mismo. Igualmente, también puede tratarse de un suceso atravesando una ardua planificación, para que cada aspecto que lo conforme esté bajo control. Existen tres acepciones sobre el término: el de eventualidad (algo inesperado), un acontecimiento (planificado) y el evento como tal (acaecimiento), siendo este el encargado de englobar los dos primeros. La definición se adapta también al contexto científico, histórico y/o social de cada situación.
<hr>
<img src="https://images.evisos.cl/2012/07/07/organizamos-tu-evento-cumpleanos-eventos-coorporativos-fiestas-de_1cca3c5_3.jpg" alt="">
<br>
<hr>
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
