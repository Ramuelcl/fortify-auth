@extends('layouts.app')

{{-- @section('title', 'Guzanet') --}}

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">

        @if ($user->count())
            <div class="card-body">
                {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

                {!! Form::label('name', 'Nombre:') !!}
                {!! Form::text('name') !!}

                {!! Form::label('email', 'eMail:') !!}
                {!! Form::email('email') !!}
                <h2 class="h5">Listado de Roles</h2>
                @foreach ($user['roles'] as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, false, ['class' => 'mr-1']) !!}
                            {{ $role->name }}
                        </label>
                    </div>
                @endforeach
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary mt-2']) !!}
                {!! Form::close() !!}

            </div>
            <div class="card-footer">
                {{-- {{ $users->links() }} --}}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>>
            </div>
        @endif
    </div>
@endsection
