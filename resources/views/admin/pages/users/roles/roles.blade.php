@extends('adminlte::page')

@section('title', 'Cargos do Usuário {$user->name}')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('users.index') }}">Users</a></li>
    </ol>

    <h1>Cargos do Usuário <strong>{{ $user->name }}</strong></h1>
        
    <a href="{{ route('users.roles.available', $user->id) }}" class="btn btn-dark">ADD NOVO CARGO</i></a>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th style="width: 50px">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>
                                {{ $role->name }}
                            </td>
                            <td>
                                {{-- <a href="{{ route('details.role.index', $role->url) }}" class="btn btn-primary">Detalhes</a> --}}
                                <a href="{{ route('users.role.detach', [$user->id, $role->id]) }}" class="btn btn-danger">DESVINCULAR</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        @if (isset($filters))
            {!! $roles->appends($filters)->links() !!}
        @else
            {!! $roles->links() !!}    
        @endif
        
    </div>
@stop