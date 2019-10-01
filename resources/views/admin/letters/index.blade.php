@extends('admin.layouts.default')

@section('title', 'List')

@section('content')
    <style>
        .thum {
            width: 100%;
            height: 100px;
        }
        .letterhere {
            width: 25px;
            height: 25px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            Mis cartas
                        </div>

                        <div class="float-right">
                            <a class="btn btn-outline-success" href="{{ route('admin.letters.create') }}">Redactar carta</a>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                        @forelse($letters as $letter)
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="card text-center mb-3">
                                    <img class="card-img-top thum"
                                         src="/assets/img/carta.svg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a class="btn-link text-danger"
                                               href="#">
                                                Carta enviada
                                            </a>
                                        </h5>

                                        <p class="card-text">
                                            <img class="letterhere" src="/assets/img/carta.svg" alt="Letter">
                                            <strong>Ver carta</strong>
                                        </p>
                                    </div>
                                        <a class="btn btn-outline-danger btn-block" href="#">Eliminar</a>
                                 </div>
                            </div>
                        @empty
                            <p>No hay carta</p>
                        @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
