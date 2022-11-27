@extends('layouts.plantilla')

@section('content')
<br>
<div class="containter">
<div class="row justify-content-center">
      <div class="col-md-8">
           <div class="card">
            <div class="card-header">{{ __('Agregar carro') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Creación de un nuevo carro') }}
                    {{ session('status') }}

             <form action="{{route('guardarcarros')}}" method="POST">
                @csrf
                <label>
                    Modelo: <br>
                    <input name="modelo" type="text">
                   </label>
                <label>
                    Marca: <br>
                    <input name="marca" type="text">
                </label>   
                <label>
                    Color: <br>
                    <input name="color" type="text">
                 </label> 
                 <label>
                    Dueño: <br>
                    <input name="duenio" type="text">
                 </label> 
                 <button type="submit">Guardar</button>
              </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection