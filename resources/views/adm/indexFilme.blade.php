@extends('includes.base')

@section('content')
    <div style="margin-top: 2vw;">
        <h1 style="font-size: 24px;">Lista de Filmes</h1>

        @foreach ($filmes as $filme)
            <div class="card" style="width: 18rem; display: inline-block; margin: 10px;">
                <img class="card-img-top" src="{{ $filme->imagem_capa }}" alt="Capa do Filme">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 18px;">{{ $filme->nome }}</h5>
                    <p class="card-text">{{ $filme->sinopse }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="font-size: 14px;">Ano de lançamento:
                        {{ date('d/m/Y', strtotime($filme->ano)) }}</li>
                    <li class="list-group-item" style="font-size: 14px;">Categoria: {{ $filme->categoria }}</li>
                </ul>
                <div class="card-body">
                    <a href="{{ route('usuario.viewFilmeUsuario', $filme->id) }}" class="card-link"
                        style="font-size: 14px;">Ver detalhes</a>
                    <a href="{{ route('adm.deleteFilme', $filme->id) }}">Apagar</a>
                    <a href="{{ route('adm.editFilme', $filme->id) }}">Editar</a>
                </div>
            </div>
        @endforeach
        <br>
    </div>
@endsection
