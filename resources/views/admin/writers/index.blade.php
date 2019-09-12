@extends('admin.layouts.default')

@section('title', 'List')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="title">
        <h1>Lista de escritores</h1>
        <a href="" class="btn btn-outline-light rounded-pill">Crear Nuevo</a>
    </div>
    <div class="table-responsive-xl">
        <table class="table table-sm table-hover mt-2">
            <thead class="table-primary">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">E-mail</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($writers as $writer)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $writer->name }}</td>
                        <td>{{ $writer->lastname }}</td>
                        <td>{{ $writer->email }}</td>
                        <td>
                            <a href="#" class="btn btn-outline-success rounded-pill">Editar</a>
                            <a href="" class="btn btn-outline-danger rounded-pill">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
