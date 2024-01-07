@extends('admin.dashboard')

@section('contenu')

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
          <td>Vous</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        
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
        </tr>
        
    </tbody>
  </table>
<div>
@endsection
