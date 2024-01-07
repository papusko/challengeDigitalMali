@extends('admin.dashboard')

@section('contenu')
<div class="card shadow mb-4">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Les propositions d'idée </h6>
    </div>
      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div><br />
      @endif
    <div class="card-body">
        <div class="table-responsive">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> </h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Télécharger en excel</a>
                    </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <td>Nom de l'équipe </td>
                      <td>Participant/admin</td>
                      <td colspan="2">Action</td>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                      <td>Nom de l'équipe </td>
                      <td>Participant/admin</td>
                      <td colspan="2">Action</td>
                    </tr>
                </tfoot>
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
        </div>
    </div>
</div>
@endsection
