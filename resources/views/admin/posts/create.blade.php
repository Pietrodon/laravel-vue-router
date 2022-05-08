@extends('layouts.app')

@section('content')

<div class="container">
    {{-- action = rotta dove andranno i nostri dati --}}
    <form action="{{route('admin.posts.store')}}" method="POST" >
        @csrf
        {{-- form  --}}
        <div class="form-group">
          <label for="title">Titolo del post</label>
          {{-- input con valore name,value  --}}
          <input type="text" class="form-control @error('title') is-invalid @enderror"   id="title" name="title" value="{{old('title')}}" aria-describedby="emailHelp">
          {{-- errore in caso di campo non valido --}}
          @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
            <label for="description">Contenuto del post</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description"  name="description"rows="3">{{old('description')}}</textarea>
            @error('description')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="category_id">Seleziona una categoria</label>
            <select class="form-control" id="category_id" name="category_id">
                <option> Nessuna Categoria </option>
                @foreach ( $categories as $category )
                <option  value="{{ $category->id }}">{{$category->name}}</option>
                @endforeach
              </select>
        </div>

        <div class="form-group">
            <label for="published_at">Data Modifica</label>
            <input type="date" class="form-control @error('published_at') is-invalid @enderror"   id="published_at" name="published_at" value="{{old('published_at')}}" aria-describedby="emailHelp">
            @error('published_at')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>


        <button type="submit" class="btn btn-primary">Salva post</button>
      </form>
</div>

@endsection
