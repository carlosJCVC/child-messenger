@extends('admin.layouts.default')

@section('title', 'List')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20">
                <h4 class="c-grey-900 mB-20 d-inline">Lista de articulos</h4>
                <a href="{{ route('admin.articles.create')}}" class="btn btn-outline-primary rounded-pill float-right">Crear Nuevo</a>
                <div class="table-responsive-xl">
                    <table class="table table-hover table-sm mt-2">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Palabra clave</th>
                                <th scope="col">Contenido</th>
                                <th scope="col">Bibliografia</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($articles as $key => $articulo)
                                <tr>
                                    
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $articulo->article_title }}</td>
                                    <td>{{ $articulo->article_author }}</td>
                                    <td></td>
                                    <td>{{ $articulo->article_content }}</td>
                                    <td>{{ $articulo->article_bibliography}}</td>
                                <td>
                                        <a href="{{ route('admin.articles.edit', $article->id ) }}" class="btn btn-outline-success rounded-pill">Editar</a>
                                        <form method="POST" style="display:inline-block" action="{{ route('admin.articles.destroy', $article->id) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            
                                            <button type="button" onclick="delete_action(event);" class="btn btn-outline-danger rounded-pill">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if ($articles->count() > 10)
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
