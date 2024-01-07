@extends('admin.dashboard')

@section('contenu')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier votre proposition
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

      <form method="post" action="{{ route('idea.update', $idea->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="title">Titre :</label>
              <input type="text" class="form-control" name="title" value="{{ $idea->title }}"/>
          </div>

          <div class="form-group">
              <label for="cases">Description :</label>
              <input type="text" class="form-control" name="description" value="{{ $idea->description }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection