@extends('includes.form')

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
            <form action="{{ route('adm.addFilmeSave') }}" method="post">
                @csrf
                <h2>Adicionar Filme</h2>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input  type="text" name="nome" placeholder="Nome do usuário" required>
                    <label for="">Nome do Usuário</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="email" name="email" placeholder="Email do usuário" required>
                    <label for="">Email do Usuário</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="password" name="password" placeholder="Senha do usuário" required>
                    <label for="">Senha do Usuário</label>
                </div>
                <div>
                    <label for="">Usuário</label>
                    <input id="permissao" name="permissao" type="radio" value="0" >
                    <label for="">Administrador</label>
                    <input name="permissao" type="radio" value="1" >
                </div>
                <button>Logar</button>
            </form>
        </div>
    </div>
</section>
@endsection
