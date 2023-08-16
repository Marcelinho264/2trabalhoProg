<h2>Apagar Filme</h2>
<p>Você está prestes a apagar {{ $filme->nome }}.</p>
<p>Tem certeza de que quer fazer isso?</p>

<form action="{{ route('adm.deleteFilmeForReal', $filme->id) }}" method="post">

    @csrf
    @method('delete')

    <input type="submit" value="Pó apagá!">
</form>
