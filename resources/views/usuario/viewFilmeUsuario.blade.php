@extends('includes.base')

@section('content')
    <div style="margin-top: 2vw;">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <img class="card-img-top" src="{{ $filme->imagem_capa }}" alt="Capa do Filme">
                <h5 class="card-title">{{ $filme->nome }}</h5>
                <p class="card-text">{{ $filme->sinopse }}</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="font-size: 14px;">Ano de lançamento:
                        {{ date('d/m/Y', strtotime($filme->ano)) }}</li>
                    <li class="list-group-item" style="font-size: 14px;">Categoria: {{ $filme->categoria }}</li>
                </ul>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $filme->link_trailer }}" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection
