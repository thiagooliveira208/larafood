@extends('adminlte::page')

@section('title', 'Categorias do Produto {$product->title}')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Produtos</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('products.categories', $product->id) }}">Categorias</a></li>
    </ol>

    <h1>Categorias do Produto <strong>{{ $product->title }}</strong></h1>
        
    <a href="{{ route('products.categories.available', $product->id) }}" class="btn btn-dark">ADD NOVA CATEGORIA</i></a>
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
                    @foreach ($categories as $category)
                        <tr>
                            <td>
                                {{ $category->name }}
                            </td>
                            <td>
                                {{-- <a href="{{ route('details.plan.index', $plan->url) }}" class="btn btn-primary">Detalhes</a> --}}
                                <a href="{{ route('products.category.detach', [$product->id, $category->id]) }}" class="btn btn-danger">DESVINCULAR</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        @if (isset($filters))
            {!! $categories->appends($filters)->links() !!}
        @else
            {!! $categories->links() !!}    
        @endif
        
    </div>
@stop