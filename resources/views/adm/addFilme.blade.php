@extends('includes.form')

<h2>Filmes SB</h2>

@if ($errors)
@foreach ($errors->all() as $err)
{{ $err }}<br>
@endforeach
@endif

{{-- <form action="{{ route('adm.addFilmeSave') }}" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome do filme">
    <br>
    <input type="text" name="categoria" placeholder="Categoria do filme">
    <br>
    <input type="date" name="ano" placeholder="Ano do filme">
    <br>
    <input type="text" name="sinopse" placeholder="Sinopse do filme">
    <br>
    <input type="text" name="link_trailer" placeholder="Link do trailer">
    <br>
    <input type="text" name="imagem_capa" placeholder="Capa do filme">
    <br>
    <input type="submit" value="Gravar">
</form> --}}

@section('content')
<section>
    <div class="form-box">
        <div class="form-value">
            <form action="{{ route('adm.addFilmeSave') }}" method="post">
                @csrf
                <h2>Adicionar Filme</h2>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="nome" required>
                    <label for="">Nome do Filme</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="categoria"  required>
                    <label for="">Categoria do Filme</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="number" name="ano" required>
                    <label for="">Ano do Filme</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="sinopse" required>
                    <label for="">Sinopse do Filme</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="link_trailer" required>
                    <label for="">Link do Trailer</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="text" name="imagem_capa" required>
                    <label for="">Imagem da capa</label>
                </div>
                <button>Logar</button>
            </form>
        </div>
    </div>
</section>
@endsection
