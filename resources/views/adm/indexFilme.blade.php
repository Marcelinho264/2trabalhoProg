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
                    <li class="list-group-item" style="font-size: 14px;">Ano de lançamento: {{ date('d/m/Y', strtotime($filme->ano)) }}</li>
                    <li class="list-group-item" style="font-size: 14px;">Categoria: {{ $filme->categoria }}</li>
                </ul>
                <div class="card-body">
                    <a href="{{ route('adm.deleteFilme', $filme->id) }}">Apagar</a>
                    <a href="{{ route('adm.editFilme', $filme->id) }}">Editar</a>
                </div>
            </div>
        @endforeach
        <br>
        <a href="{{ route('adm.addFilme' )}}"><button class="btn btn-danger">Adicionar Filme</button></a>
        <a href="{{ route('adm.addUsuario')}}"><button class="btn btn-danger">Adicionar novo Usuário</button></a>
        <a href="{{ route('adm.indexUsuario')}}"><button class="btn btn-danger">Visualizar Usuários</button></a>
    </div>
@endsection

