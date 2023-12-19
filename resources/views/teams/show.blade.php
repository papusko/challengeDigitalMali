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
          
          <td>Nom de l'équipe</td>
          <td>Vous</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        
        <tr>
            <td>{{$team->title}}</td>
            <td>{{$team->user->fullname}}</td>
            <td><a href="{{ route('team.edit', $team->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('team.destroy', $team->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        
    </tbody>
  </table>
<div>
@endsection
