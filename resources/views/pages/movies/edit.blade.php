@extends('layout.app')
@yield('titolo-pagina','Modifica Film')

@section('contenuto-main')

<form action="{{route('movies.update', $movie->id)}}">
    {{-- title --}}
    <div class="my-2">
        <h2>Title</h2>
        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
    </div>
    {{-- genre --}}
    <div class="my-2">
        <h2>Genre</h2>
        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
    </div>
    {{-- vote --}}
    <div class="my-2">
        <h2>Vote</h2>
        <input class="form-control form-control-lg" type="number" min="0" max="5" placeholder=".form-control-lg" aria-label=".form-control-lg example">
    </div>

</form>

@endsection
