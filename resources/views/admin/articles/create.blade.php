@extends('admin.layouts.default')

@section('title', 'Create')

@section('content')
<script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>

<div class="container">
    <div class="title">
        <h1>Redactar un Articulo</h1>

    </div>
        <div class="card border-primary mb-3 mt-2">
           
            <form action="{{ route('admin.articles.store') }}" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}

                <div class="card-body">	
                    <div>
                        <b>Estimado Editor</b>
                        <div class="container">
                            <b>Titulo: </b><input type="text" name="article_title" style="margin-bottom: 15px" class="form-control d-inline-flex w-75" placeholder="Escribe el articulo del titulo">
                        </div>
                        <div>
                        	<label style="margin-bottom: 15px" name="article_content"><b>Contenido: </b></label>	
                        	<textarea name="article_content" id="article_content" cols="30" rows="10"  class="form-control mt-2"></textarea>
                    	</div>
                    </div>
                   
                </div>
                

                <div class="text-center mb-4">
                    <button class="btn btn-outline-success" type="submit">ENVIAR ARTICULO</button>
                    <a href="{{ route('admin.articles.index') }}" class="btn btn-outline-danger">CANCELAR</a>
                </div>
            </form>
        </div>
    </div>
    <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'article_content' );
    </script>

@endsection