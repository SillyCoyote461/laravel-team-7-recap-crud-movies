@extends('layout.app')
@yield('titolo-pagina','Catalogo Films')

@section('contenuto-main')
<table class="table">
    {{-- table head --}}
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Genere</th>
        <th scope="col">Voto</th>
        {{-- settings --}}
        <th>

        </th>
      </tr>
    </thead>
    {{-- table body --}}
    <tbody>
        {{-- movies loop --}}
        @foreach ($movies as $elem)
        <tr>
            <th scope="row">{{$elem['id']}}</th>
            <td>{{$elem['title']}}</td>
            <td>{{$elem['genre']}}</td>
            <td>{{$elem['vote']}}</td>
            <td>
                {{-- edit --}}
                <a href="{{route('movies.edit')}}">
                    <i class="fa-solid fa-square-pen"></i>
                </a>
                {{-- delete --}}
                <a href="{{route('movies.destroy')}}">
                    <i class="fa-solid fa-trash-can"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
