@extends('admin.layouts.default')

@section('title',"create")

@section('content')
<script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>

    <div class="title">
        <h1>Redactar Articulo</h1>
    </div>

    <div class="card mt-2">
        <div class="card-body">
            <form class="form-validation" method="post" action="{{ route('admin.articles.store')}}" enctype="multipart/form-data" novalidate>
                {{ csrf_field() }}
                
                @include('admin.articles.form')

                <div class="text-center mb-4">
                    <button class="btn btn-outline-success" type="submit">Enviar Articulo</button>
                    <a href="{{ route('admin.articles.index') }}" class="btn btn-outline-danger">Cancelar</a>                    
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
@section('scripts')
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('form-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
    </script>
@endsection