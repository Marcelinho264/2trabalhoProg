<h2>Adicione um usuário</h2>

@if ($errors)
    @foreach ($errors->all() as $err)
        {{ $err }}<br>
    @endforeach
@endif

<form action="{{ route('adm.addSave') }}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome do usuário">
    <br>
    <input type="email" name="email" placeholder="Email do usuário">
    <br>
    <input type="password" name="password" placeholder="Senha do usuário">
    <br>
    <label>Usuário</label>
    <input type="radio" name="permissao" value="1">
    <label>Administrador</label>
    <input type="radio" name="permissao" value="0">
    <br>
    <input type="submit" value="Gravar">
</form>
