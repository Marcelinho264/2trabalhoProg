<div class="container">
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
</div>
