@extends('admin.layouts.default')

@section('title', 'List')

@section('content')
    
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
                            <a class="btn btn-outline-success" href="{{ route('admin.articles.create') }}">Redactar carta</a>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                        @forelse($letters as $letter)
                            
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