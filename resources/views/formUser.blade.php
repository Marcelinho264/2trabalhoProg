@extends('includes.form')

    <h2>Filmes SB</h2>

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


{{-- <form method="POST" action="{{ route('login') }}">
    @csrf
    <div>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <button type="submit">Entrar</button>
    </div>
</form> --}}

@section('content')

<section>
    <div class="form-box">
        <div class="form-value">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h2>Login</h2>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="email" id="email" name="email" required>
                    <label for="">E-mail</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" id="password" name="password" required>
                    <label for="">Senha</label>
                </div>
                <button>Logar</button>
            </form>
        </div>
    </div>
</section>

@endsection
