@extends('layouts.plantilla')

@section('content')
<br>
<div class="containter">
<div class="row justify-content-center">
      <div class="col-md-8">
           <div class="card">
            <div class="card-header">{{ __('EDITAR MENU') }}</div>

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
                    Menu del Dia: <br>
                    <input name="nombre" type="text" value="{{$libros->modelo}}">
                   </label>
                <label>
                    Menu 1: <br>
                    <input name="genero" type="text" value="{{$libros->marca}}">
                </label>   
                <label>
                    Menu 2: <br>
                    <input name="editorial" type="text" value="{{$libros->color}}">
                 </label> 
                 <button type="submit">Guardar Cambios</button>
              </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection