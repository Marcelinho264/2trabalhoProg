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
                <form method="POST" action="{{ route('adm.editUsuarioSave', $usuario->id) }}">
                    @csrf
                    <h2>Atualizar usuario</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" value="{{ old('nome', $usuario->nome ) }}" name="nome" required>
                        <label for="">Nome</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" value="{{ old('email', $usuario->email) }}" name="email" required>
                        <label for="">Email</label>
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
