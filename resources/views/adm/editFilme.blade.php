@extends('includes.edit')

<h2>Filmes SB</h2>

@if ($errors)
@foreach ($errors->all() as $err)
{{ $err }}<br>
@endforeach
@endif

@section('content')
<section>
    <div class="form-box">
        <div class="form-value">
            <form method="POST" action="{{ route('adm.editFilmeSave', $filme->id) }}">
                @csrf
                <h2>Atualizar filme</h2>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="nome" class="form-control"
                    value="{{ old('name', $filme->nome) }}" required>
                    <label for="">Nome do filme</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="categoria" class="form-control"
                    value="{{ old('categoria', $filme->categoria) }}" required>
                    <label for="">Categoria do Filme</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="number" name="ano" class="form-control"
                    value="{{ old('ano', $filme->ano) }}">
                    <label for="">Ano de lançamento</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="sinopse" class="form-control"
                    value="{{ old('sinopse', $filme->sinopse) }}">
                    <label>Sinopse do filme</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="link_trailer" class="form-control"
                    value="{{ old('link_trailer', $filme->link_trailer) }}">
                    <label>Link do filme</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="file" name="imagem_capa" class="form-control"
                    value="{{ old('imagem_capa', $filme->imagem_capa) }}">
                    <label>Imagem da capa</label>
                </div>
                <button>Logar</button>
            </form>
        </div>
    </div>
</section>
@endsection
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Filme</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('adm.editFilmeSave', $filme->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" name="nome" class="form-control"
                                value="{{ old('name', $filme->nome) }}">
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <input type="text" name="categoria" class="form-control"
                                value="{{ old('email', $filme->categoria) }}">
                        </div>
                        <div class="form-group">
                            <label for="ano">Ano</label>
                            <input type="date" name="ano" class="form-control"
                                value="{{ old('email', $filme->ano) }}">
                        </div>
                        <div class="form-group">
                            <label for="sinopse">Sinopse</label>
                            <input type="text" name="sinopse" class="form-control"
                                value="{{ old('email', $filme->sinopse) }}">
                        </div>
                        <div class="form-group">
                            <label for="link_trailer">Link do Trailer</label>
                            <input type="text" name="link_trailer" class="form-control"
                                value="{{ old('email', $filme->link_trailer) }}">
                        </div>
                        <div class="form-group">
                            <label for="imagem_capa">Imagem da Capa</label>
                            <input type="file" name="imagem_capa" class="form-control"
                                value="{{ old('email', $filme->imagem_capa) }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
