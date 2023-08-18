@extends('includes.base')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img class="card-img-top" src="{{ $filme->imagem_capa }}" alt="Capa do Filme">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 18px;">{{ $filme->nome }}</h5>
                        <p class="list-group-item" style="font-size: 14px;">{{ $filme->sinopse }}</p>
                        <ul class="list-group list-group-flush">
                            <p class="list-group-item" style="font-size: 14px;">Ano de lançamento:
                                {{ date('d/m/Y', strtotime($filme->ano)) }}</p>
                            <p class="list-group-item" style="font-size: 14px;">Categoria: {{ $filme->categoria }}</p>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/{{ substr($filme->link_trailer, -11) }}"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
