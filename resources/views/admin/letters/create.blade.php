@extends('admin.layouts.default')

@section('title', 'Create')

@section('content')

<div class="container">
    <div class="title">
        <h1>Redactar una carta</h1>
    </div>
        <div class="card border-primary mb-3 mt-2">
            <img src="{{ asset('assets/img/carta.png') }}" style="width: 10rem;" class="card-img-top img-fluid d-flex mx-auto" alt="">
            <form action="" method="post">

                <div class="card-header bg-transparent border-success">
                    <div class="date text-right">
                        <b>
                            @php
                                $date = Carbon::now()->format('d').' de '.Carbon::now()->format('F').' de '.Carbon::now()->format('y');
                                
                                echo $date;
                            @endphp
                        </b>
                        <br>
                        <b>Cochabamba, Bolivia</b> 
                    </div>
                    <div class="letter-information">
                        <b>Direccion : </b><input type="text" placeholder="Escribe tu direccion" class="form-control w-25 d-inline-flex">
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <b>Estimado Sr.</b>
                        <div class="container">
                            <b>Niño mensajero  </b><input type="text" class="form-control d-inline-flex w-75" placeholder="Mandanos tus saludos aqui">
                        </div>
                    </div>
                    <div>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Escribe el contenido de la carta aqui" class="form-control mt-2"></textarea>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-success">
                    <input type="text" class="form-control" placeholder="Escribe tu despedida">
    
                    <div class="text-center mt-2">
                        <b class="d-block">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</b>
                        <b class="d-block">{{ Auth::user()->email }}</b>
                    </div>
                </div>

                <div class="text-center mb-4">
                    <button class="btn btn-outline-success" type="submit">ENVIAR CARTA</button>
                    <a href="{{ route('admin.letters.index') }}" class="btn btn-outline-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection