@include('admin.includes.alerts')

<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="name" class="form-control" plancefolder="Nome" value="{{ $category->name ?? old('name') }}">
</div>
<div class="form-group">
    <label>Descrição</label>
    <textarea name="description" cols="50" rows="5">{{ $category->description ?? old('description') }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>