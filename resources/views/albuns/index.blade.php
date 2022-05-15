<x-layout title="Novo Album">
    @foreach ($albuns as $album)
        <li> {{$album}} </li>
    @endforeach
</x-layout>



