<x-layout title="Adicionar músicas">
    <form class="row g-3" action="/musicas/salvar/{{ $albumId }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="col-md-12">
            <label for="nomeMusica" class="form-label">Nome da música</label>
            <input type="text" class="form-control" id="nomeMusica" name="nomeMusica" required>
        </div>
        <div class="col-md-12">
            <label for="audio" class="form-label">Upload Música</label>
            <input type="file" accept="audio/*" class="form-control" id="audio" name="audio" required>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </div>
    </form>
</x-layout>
