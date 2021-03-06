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
                                @forelse($articles as $article)
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <div class="card text-center mb-3">
                                            <img class="card-img-top thum"
                                                 src="/assets/img/carta.svg" alt="Card image cap">
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
                                
                        </div>
                        @if($count > 0)
                            <form class="form-validation" method="post" action="{{ route('admin.releases.store')}}" enctype="multipart/form-data" novalidate>
                                {{ csrf_field() }}
                            <div class="form-row">    
                                <div class="col-md-12 mb-3">
                                    <label>Creacion de Boletin</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">B</span>
                                        </div>
                                        <select class="js-example-basic-multiple form-control" 
                                            name="articles_selected[]" 
                                            multiple="multiple">
                                            @foreach ($articles as $item)
                                                <option value="{{ $item->article_title }}">{{ $item->article_title }}</option>
                                            @endforeach
                                        </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        
                                        <div class="invalid-feedback {{ $errors->has('articles_selected')? 'd-block' : '' }}">
                                            {{ $errors->has('articles_selected')? $errors->first('articles_selected') : 'Seleccion de un articulo es requerida'  }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="text-center mb-4">
                                    <button class="btn btn-outline-success" type="submit">Crear Boletin</button>
                                    <a href="{{ route('admin.releases.index') }}" class="btn btn-outline-danger">Cancelar</a>                    
                                </div>
                            
                            </form>    
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
