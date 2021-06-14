@extends('adminlte::page')

@section('title', 'Perfis da Permissão {$permission->name}')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('permissions.index') }}">Perfis</a></li>
    </ol>

    <h1>Perfis da Permissão <strong>{{ $permission->name }}</strong></h1>
        
    <a href="{{ route('profiles.permissions.available', $permission->id) }}" class="btn btn-dark">ADD NOVA PERMISSÃO</i></a>
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
                    @foreach ($profiles as $profile)
                        <tr>
                            <td>
                                {{ $profile->name }}
                            </td>
                            <td>
                                {{-- <a href="{{ route('details.permission.index', $permission->url) }}" class="btn btn-primary">Detalhes</a> --}}
                                <a href="{{ route('profiles.permission.detach', [$profile->id, $permission->id]) }}" class="btn btn-danger">DESVINCULAR</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        @if (isset($filters))
            {!! $profiles->appends($filters)->links() !!}
        @else
            {!! $profiles->links() !!}    
        @endif
        
    </div>
@stop