@extends('adminlte::page')

@section('title', 'Permissões do Cargo {$role->name}')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('roles.index') }}">Cargos</a></li>
    </ol>

    <h1>Permissões do Perfil <strong>{{ $role->name }}</strong></h1>
        
    <a href="{{ route('roles.permissions.available', $role->id) }}" class="btn btn-dark">ADD NOVA PERMISSÃO</i></a>
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
                    @foreach ($permissions as $permission)
                        <tr>
                            <td>
                                {{ $permission->name }}
                            </td>
                            <td>
                                {{-- <a href="{{ route('details.role.index', $role->url) }}" class="btn btn-primary">Detalhes</a> --}}
                                <a href="{{ route('roles.permission.detach', [$role->id, $permission->id]) }}" class="btn btn-danger">DESVINCULAR</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        @if (isset($filters))
            {!! $permissions->appends($filters)->links() !!}
        @else
            {!! $permissions->links() !!}    
        @endif
        
    </div>
@stop