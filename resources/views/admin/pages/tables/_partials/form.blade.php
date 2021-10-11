@include('admin.includes.alerts')

<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="identify" class="form-control" plancefolder="Identificador" value="{{ $table->identify ?? old('identify') }}">
</div>
<div class="form-group">
    <label>Descrição</label>
    <textarea name="description" cols="50" rows="5">{{ $table->description ?? old('description') }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>