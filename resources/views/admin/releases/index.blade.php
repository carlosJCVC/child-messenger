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
                            Mis Boletines
                        </div>

                        <div class="float-right">
                            <a class="btn btn-outline-success" href="{{ route('admin.releases.create') }}">Subir Boletin</a>
                        </div>

                    </div>
                    <div class="card-body">
                        boletines
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
