<x-layout title="Editar álbum: {{$album->nome}}">
    <form class="row g-3" action="/albuns/salvar/{{$album->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-12">
            <label for="nomeALbum" class="form-label">Nome do álbum</label>
            <input value="{{$album->nome}}" type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="col-6">
            <label for="artista" class="form-label">Artista</label>
            <input value="{{$album->artista}}" type="text" class="form-control" id="artista" name="artista" required>
        </div>
        <div class="col-6">
            <label for="genero" class="form-label">Gênero</label>
            <input value="{{$album->genero}}" type="text" class="form-control" id="genero" name="genero" required>
        </div>
        <div class="col-md-6">
            <label for="preco" class="form-label">Preço</label>
            <input value="{{$album->preco}}" type="number"  min="1" step="any"  class="form-control" id="preco" name="preco" required>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>
</x-layout>
