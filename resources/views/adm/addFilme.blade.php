<h2>Adicione um filme</h2>

@if ($errors)
    @foreach ($errors->all() as $err)
        {{ $err }}<br>
    @endforeach
@endif

<form action="{{ route('adm.addFilmeSave') }}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome do filme">
    <br>
    <input type="text" name="categoria" placeholder="Categoria do filme">
    <br>
    <input type="date" name="ano" placeholder="Ano do filme">
    <br>
    <input type="text" name="sinopse" placeholder="Sinopse do filme">
    <br>
    <input type="text" name="genero" placeholder="Genêro do filme">
    <br>
    <input type="text" name="link_trailer" placeholder="Link do trailer">
    <br>
    <input type="text" name="imagem_capa" placeholder="Capa do filme">
    <br>
    <input type="submit" value="Gravar">
</form>
