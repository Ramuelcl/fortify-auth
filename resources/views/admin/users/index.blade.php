@extends('layouts.app')

{{-- @section('title', 'Guzanet') --}}

@section('content')
    <div class="card">
        <div class="card-header">
            <input type="text" name="" id="" class="form-control" placeholder="ingrese el nombre o correo de un usuario ">
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>eMail</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td width="10px">
                                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $users->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>>
            </div>
        @endif
    </div>
@endsection
