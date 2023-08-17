<h2>Apagar Usuario</h2>
<p>Você está prestes a apagar {{ $usuario->nome }}.</p>
<p>Tem certeza de que quer fazer isso?</p>

<form action="{{ route('adm.deleteUsuarioForReal', $usuario->id) }}" method="post">

    @csrf
    @method('delete')

    <input type="submit" value="Pó apagá!">
</form>
