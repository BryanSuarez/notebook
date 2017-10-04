@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Lista de notas de: <strong><span>{{ Auth::user()->name }}</span></strong></h3><hr>
        <a href="/notes/create" class="btn btn-primary">Crear nota</a><hr>
        @include('partials.success')
    <div class="col-sm-12 col-md-12 col-lg-12">
        <table class="table table-condensed">
            <tbody>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Contenido</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($notes as $note)
                        <tr>
                            <td>{{$note->id}}</td>
                            <td>{{$note->title}}</td>
                            <td>{{$note->body}}</td>
                            <td>Editar | Eliminar</td>
                        </tr>
                    @endforeach
                </tbody>
            </tbody>
        </table>
    </div>
    </div>
@endsection
