@extends('layouts.app')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Faites une proposition d'idée
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('idea.store') }}">
.         @csrf
          <div class="form-group">
              <label for="title">Titre:</label>
              <textarea type="text" class="form-control" name="title"></textarea>
          </div>

          <div class="form-group">
              <label for="description">Description de l'idée :</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection