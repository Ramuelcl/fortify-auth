@extends('layouts.app')

{{-- @section('title', 'Guzanet') --}}

@section('content')
    <div class="card">

        @if ($user->count())
            <div class="card-body">
                {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

                {!! Form::label('name', 'Nombre:') !!}
                {!! Form::text('name') !!}

                {!! Form::label('email', 'eMail:') !!}
                {!! Form::email('email') !!}
                {{-- @foreach ($user['roles'] as $role)
                    $role
                @endforeach --}}
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
