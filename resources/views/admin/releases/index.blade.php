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
                            Mis Articulos
                        </div>

                        <div class="float-right">
                            <a class="btn btn-outline-success" href="{{ route('admin.articles.create') }}">Redactar Articulo</a>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            @if($articles)
                            <form class="form-validation" method="post" action="{{ route('admin.newspapper.create')}}" enctype="multipart/form-data" novalidate>
                                {{ csrf_field() }}
                                <select class="js-example-basic-multiple form-control" 
                                    name="permissions[]" 
                                    multiple="multiple">
                            @endif        
                                @forelse($articles as $article)
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <div class="card text-center mb-3">
                                            <img class="card-img-top thum"
                                                 src="/assets/img/carta.svg" alt="Card image cap">
                                             <option value="{{ $article->id }}"></option>    
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <a class="btn-link text-danger"
                                                       >
                                                        {{ $article->article_title }}
                                                    </a>
                                                </h5>

                                                <p class="card-text">
                                                    <a href="{{ route('admin.articles.show', $article->id ) }}" class="btn btn-outline-success btn-block">Ver articulo</a>
                                                </p>
                                                <a href="{{ route('admin.articles.edit', $article->id ) }}" class="btn btn-outline-success btn-block">Editar</a>
                                            </div>
                                                <form method="POST" style="display:inline-block" action="{{ route('admin.articles.destroy', $article->id) }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    
                                                    <button type="button" onclick="delete_action(event);" class="btn btn-outline-danger btn-block">Eliminar</button>
                                                </form>
                                         </div>
                                    </div>
                                @empty
                                    <p>No hay articulos</p>
                                @endforelse
                                @if($articles)
                                    <div class="text-center mb-4">
                                        <button class="btn btn-outline-success" type="submit">Crear Boletin</button>
                                        <a href="{{ route('admin.articles.index') }}" class="btn btn-outline-danger">Cancelar</a>                    
                                    </div>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
