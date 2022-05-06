@extends('layouts.app')

@section('content')


@section('content')

<div class="container">
    {{-- <a href="{{route('admin.posts.create',$posts)}}" class="btn btn-outline-info" role="button" aria-disabled="true">new Post</a> --}}
</div>
<table class="table">
    <thead>
      <tr class="table-primary">
        <th scope="col">TITOLO</th>
        <th scope="col">SLUG</th>
        <th scope="col">DESCRIZIONE</th>
        <th scope="col">PUBBLICAZIONE</th>
        <th scope="col">MODIFICA</th>
        <th scope="col">ELIMINA</th>
      </tr>
    </thead>
    <tbody>
        {{-- foreach per stampare i post --}}
        @foreach ($posts as $post)
            <tr>
                {{-- stampa degli elementi della tabella posts --}}
                <td>{{ $post -> title }}</td>
                <td>{{ $post -> slug }}</td>
                <td>{{ $post -> description }}</td>
                <td>{{ $post -> published_at }}</td>
                <td>
                    {{-- bottone per indirizzare alla pagina di edit --}}
                    <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-outline-info" role="button" aria-disabled="true">Modifica</a>
                </td>
                <td>
                    {{-- bottone per eliminare articolo --}}
                    <a href="{{route('admin.posts.destroy', $post)}}" class="btn btn-outline-danger" role="button" aria-disabled="true">Elimina</a>
                </td>
            </tr>
        @endforeach
      </tr>
    </tbody>
  </table>
@endsection

