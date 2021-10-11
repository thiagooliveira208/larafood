@include('admin.includes.alerts')

<div class="form-group">
    <label>* Título:</label>
    <input type="text" name="title" class="form-control" plancefolder="Nome" value="{{ $product->title ?? old('title') }}">
</div>
<div class="form-group">
    <label>* Preço:</label>
    <input type="text" name="price" class="form-control" plancefolder="Preço" value="{{ $product->price ?? old('price') }}">
</div>
<div class="form-group">
    <label>* Imagem:</label>
    <input type="file" name="image" class="form-control">
</div>
<div class="form-group">
    <label>* Descrição</label>
    <textarea name="description" cols="50" rows="5">{{ $product->description ?? old('description') }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>