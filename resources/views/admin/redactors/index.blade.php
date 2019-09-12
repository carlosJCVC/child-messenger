@extends('admin.layouts.default')

@section('title', 'List')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="title">
        <h1>Lista de usuarios redactores</h1>
    <a href="{{ route('admin.redactors.create')}}" class="btn btn-outline-light rounded-pill">Crear Nuevo</a>
    </div>
    <div class="table-responsive-xl">
        <table class="table table-sm table-hover mt-2">
            <thead class="table-primary">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">E-mail</th>
                <th scope="col">C.I.</th>
                <th scope="col">Telefono/Celular</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($redactors as $key => $redactor)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $redactor->firstname }}</td>
                        <td>{{ $redactor->lastname }}</td>
                        <td>{{ $redactor->email }}</td>
                        <td>{{ $redactor->ci }}</td>
                        <td>{{ $redactor->phone }}</td>
                        <td>
                            <a href="{{ route('admin.redactors.edit', $redactor->id ) }}" class="btn btn-outline-success rounded-pill">Editar</a>
                            <form method="POST" style="display:inline-block" action="{{ route('admin.redactors.destroy', $redactor->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                
                                <button type="submit" class="btn btn-outline-danger rounded-pill">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@php

@endphp
    @if ($redactors->count() > 10)
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
@endsection
