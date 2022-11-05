@extends('layouts.plantilla')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDITAR MOBILIARIO') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ingrese Nuevos Datos') }}
                    {{ session('status') }}

                    <form action="{{route('editarlibro', $libros->id)}}" method="POST">
                        @csrf

                        <label>
                            Cantidad: <br>
                            <input name="cantidad" type="text" value="{{$libros->cantidad}}">
                        </label>
                        <label>
                            Nombre: <br>
                            <input name="nombre" type="text" value="{{$libros->nombre}}">
                        </label>
                        <label>
                            Disponibles: <br>
                            <input name="disponibles" type="text" value="{{$libros->disponibles}}">
                        </label>
                        <button type="submit">Guardar Cambios</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection