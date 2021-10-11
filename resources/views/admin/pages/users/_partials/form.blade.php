@include('admin.includes.alerts')

<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="name" class="form-control" plancefolder="Nome" value="{{ $user->name ?? old('name') }}">
</div>
<div class="form-group">
    <label>Email:</label>
    <input type="email" name="email" class="form-control" plancefolder="Email" value="{{ $user->email ?? old('email') }}">
</div>
<div class="form-group">
    <label>Senha:</label>
    <input type="password" name="password" class="form-control" plancefolder="Senha">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>