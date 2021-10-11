@extends('adminlte::page')

@section('title', 'Planos do Perfil {$profile->name}')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('profiles.index') }}">Perfis</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.plans', $profile->id) }}">Planos</a></li>
    </ol>

    <h1>Planos do Perfil <strong>{{ $profile->name }}</strong></h1>
        
    <a href="{{ route('plans.profiles.available', $profile->id) }}" class="btn btn-dark">ADD NOVA PERMISSÃO</i></a>
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
                    @foreach ($plans as $plan)
                        <tr>
                            <td>
                                {{ $plan->name }}
                            </td>
                            <td>
                                {{-- <a href="{{ route('details.permission.index', $permission->url) }}" class="btn btn-primary">Detalhes</a> --}}
                                <a href="{{ route('plans.profile.detach', [$plan->id, $profile->id]) }}" class="btn btn-danger">DESVINCULAR</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        @if (isset($filters))
            {!! $plans->appends($filters)->links() !!}
        @else
            {!! $plans->links() !!}    
        @endif
        
    </div>
@stop