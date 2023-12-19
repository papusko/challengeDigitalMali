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
          
          <td>Nom de l'équipe </td>
          <td>Participant/admin</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($teams as $team)
        <tr>
            
            <td>{{$team->name}}</td>
            <td>{{$team->user->fullname}}</td>
            <td><a href="{{ route('teams.edit', $team->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('teams.destroy', $team->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
            <td>
                <a href="{{ route('teams_member.create', ['team_id' => $team->id]) }}" class="btn btn-success">Ajouter membre</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
