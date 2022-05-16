<x-layout title="Novo álbum">
    <form class="row g-3" action="/albuns/salvar" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12">
            <label for="nomeALbum" class="form-label">Nome do álbum</label>
            <input type="text" class="form-control" id="nomeALbum" name="nomeAlbum" required>
        </div>
        <div class="col-6">
            <label for="artista" class="form-label">Artista</label>
            <input type="text" class="form-control" id="artista" name="artista" required>
        </div>
        <div class="col-6">
            <label for="genero" class="form-label">Gênero</label>
            <input type="text" class="form-control" id="genero" name="genero" required>
        </div>
        <div class="col-md-6">
            <label for="image" class="form-label">Foto capa do álbum</label>
            <input type="file" accept="image/*" class="form-control"  id="image" name="image" required>
        </div>
        <div class="col-md-6">
            <label for="preco" class="form-label">Preço</label>
            <input type="number"  min="1" step="any"  class="form-control" id="preco" name="preco" required>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Criar</button>
        </div>
    </form>
</x-layout>
