@extends('layouts.app')

@section('content')

@section('content')

<div class="container">
    <h1>Stai modificando il post: <span style="color: rgb(6, 243, 6)">{{$post->title}}</span></h1>
</div>

<form action="">
    @csrf
    <div class="form-group">
        <label for="title">TITOLO</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="INSERISCI TITOLO">
      </div>
      <div class="form-group">
        <label for="content">CONTENUTO POST</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="SCRIVI CONTENUTO">
      </div>
</form>
@endsection
