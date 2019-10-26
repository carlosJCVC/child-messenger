@extends('admin.layouts.default')

@section('title', 'Home')

@section('styles')
<link rel="stylesheet" href="/assets/css/wickedcss.min.css"/>
@endsection

@section('content')
<style>    
    .thum {
        width: 100%;
        height: 100px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        DASHBOARD
                    </div>

                    <div class="float-right">
                        <a class="btn btn-outline-success" href="{{ route('admin.releases.create') }}">Subir Boletin</a>
                    </div>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-3">
                            <a href='{{ route("admin.releases.index") }}'>
                                <div class="card text-center mb-3 shadow-lg p-3 mb-5 bg-white rounded bounceIn">
                                    <img class="card-img-top thum bg-light " src="/assets/images/svg/bulletin-2.svg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <strong>
                                                <a class="btn-link" href="#">
                                                    Boletines
                                                </a>
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <a href='{{ route("admin.releases.index") }}'>
                                <div class="card text-center mb-3 shadow-lg p-3 mb-5 bg-white rounded bounceIn">
                                    <img class="card-img-top thum bg-light " src="/assets/images/svg/bulletin-3.svg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <strong>
                                                Plantillas
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <a href='{{ route("admin.letters.index") }}'>
                            <div class="card text-center mb-3 shadow-lg p-3 mb-5 bg-white rounded shake">
                                    <img class="card-img-top thum bg-light " src="/assets/images/svg/letters.svg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <strong>
                                                Cartas
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <a href='{{ route("admin.articles.index") }}'>
                                <div class="card text-center mb-3 shadow-lg p-3 mb-5 bg-white rounded shake">
                                    <img class="card-img-top thum bg-light " src="/assets/images/svg/article.svg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <strong>
                                                Articulos
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <a href='{{ route("admin.users.index") }}'>
                                <div class="card text-center mb-3 shadow-lg p-3 mb-5 bg-white rounded bounceIn">
                                    <img class="card-img-top thum bg-light " src="/assets/images/svg/grupo.svg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <strong>
                                                Usuarios
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <a href='{{ route("admin.roles.index") }}'>
                                <div class="card text-center mb-3 shadow-lg p-3 mb-5 bg-white rounded bounceIn">
                                    <img class="card-img-top thum bg-light " src="/assets/images/svg/settings.svg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <strong>
                                                Roles
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <a href='{{ route("admin.redactors.index") }}'>
                                <div class="card text-center mb-3 shadow-lg p-3 mb-5 bg-white rounded bounceIn">
                                    <img class="card-img-top thum bg-light " src="/assets/images/svg/work.svg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <strong>
                                                Redactores
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <a href='{{ route("admin.areas.index") }}'>
                                <div class="card text-center mb-3 shadow-lg p-3 mb-5 bg-white rounded bounceIn">
                                    <img class="card-img-top thum bg-light " src="/assets/images/svg/world.svg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <strong>
                                                Areas
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <a href='{{ route("admin.train.machine.index") }}'>
                                <div class="card text-center mb-3 shadow-lg p-3 mb-5 bg-white rounded bounceIn">
                                    <img class="card-img-top thum bg-light " src="/assets/images/svg/aprendizaje-automatico.svg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <strong>
                                                Entrenar clasificador de cartas
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        
    </script>    
@endsection