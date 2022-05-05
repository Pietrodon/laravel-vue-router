@extends('layouts.app')

@section('content')


@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">title</th>
        <th scope="col">slug</th>
        <th scope="col">description</th>
        <th scope="col">published_at</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr >
            {{-- <th scope="row">1</th> --}}
                <td>{{ $post -> title }}</td>
                <td>{{ $post -> slug }}</td>
                <td>{{ $post -> description }}</td>
                <td>{{ $post -> published_at }}</td>
            </tr>
        @endforeach
      </tr>
    </tbody>
  </table>
@endsection



    {{-- @foreach ($posts as $post)
        <li>{{ $post -> title }}</li>
        <li>"{{ $post -> slug }}"</li>
    @endforeach --}}
