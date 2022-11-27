@extends('layouts.plantilla')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <b>
                        <div class="card-header">{{ __('Listado de carro') }}</div>
                    </b>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table col-12">
                            <thead>
                                <tr>
                                    <td><b>ID</b></td>
                                    <td><b>Modelo</b></td>
                                    <td><b>Marca</b></td>
                                    <td><b>Color</b></td>
                                    <td><b>Dueño</b></td>
                                    <td><b>Acciones</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carros as $carro)
                                    <tr>
                                        <td>{{ $carro->id }}</td>
                                        <td>{{ $carro->modelo }}</td>
                                        <td>{{ $carro->marca }}</td>
                                        <td>{{ $carro->color }}</td>
                                        <td>{{ $carro->duenio }}</td>
                                        <td>
                                            <a href="{{ route('eliminarcarros', $carro->id) }}"
                                                class="btn btn-danger">Borrar</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('muestracarros', $carro->id) }}"
                                                class="btn btn-warning">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
