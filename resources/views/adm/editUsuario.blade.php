<div class="container">
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
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
