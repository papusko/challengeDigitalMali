@extends('admin.dashboard')

@section('contenu')

<div class="card shadow mb-4">
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
                                class="fas fa-download fa-sm text-white-50"></i> Télécharger en excel</a>
                    </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>participant</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>participant</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
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
        </div>
    </div>
</div>

@endsection
