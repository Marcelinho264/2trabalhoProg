
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Usuário</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('adm.editUsuarioSave', $usuario->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" name="nome" class="form-control"
                            value="{{ old('name', $usuario->nome) }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control"
                            value="{{ old('email', $usuario->email) }}">
                        </div>
                        <div class="form-group">
                            <label for="">Usuário</label>
                            <input type="radio" value="0" >
                            <label for="">Administrador</label>
                            <input type="radio" value="1" >
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
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
                        <input type="text" name="nome" required>
                        <label for="">Nome</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="link_trailer" required>
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
