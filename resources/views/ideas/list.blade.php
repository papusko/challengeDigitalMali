@extends('layouts.app')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-striped">

    <thead>
        <tr>
          
          <td>titre</td>
          <td>description</td>
          <td>Participant</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($ideas as $idea)
        <tr>
            
            <td>{{$idea->title}}</td>
            <td>{{$idea->description}}</td>
            <td>{{$idea->user->fullname}}</td>
            <td><a href="{{ route('idea.edit', $idea->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('idea.destroy', $idea->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
            @if(Auth::check() && Auth::user()->role === 'admin')
                <td>
                    <form action="{{ route('idea.validate', $idea->id)}}" method="post">
                        @csrf
                        <button class="btn btn-success" type="submit">Valider</button>
                    </form>
                </td>
            @endif
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
