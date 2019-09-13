@extends('layout')

@section('title',"create")

@section('content')

    <div class="title">
        <h1>Crear suscriptor</h1>
    </div>

    <div class="card mt-2">
        <div class="card-body">
            <form class="form-validation" method="POST" action="{{ route('admin.suscriptors.store') }}" novalidate>
                {{ csrf_field() }}
                
                @include('admin.suscriptors.form')

                <div class="text-center">
                    <button class="btn btn-outline-success" type="submit">Guardar</button>
                    <a href="{{ route('admin.suscriptors.index') }}" class="btn btn-outline-danger">Cancelar</a>                    
                </div>
            </form>
        </div>
    </div>
@endsection