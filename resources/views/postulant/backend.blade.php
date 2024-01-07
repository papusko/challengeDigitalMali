@extends('admin.dashboard')
@section('contenu')
<div class="row">
                         <div class="container-fluid">


                            <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Liste des postulants en developpement backend</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                                    <h1 class="h3 mb-0 text-gray-800"> </h1>
                                                    
                                                    <a href="{{ route('export.to.excel') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                                            class="fas fa-download fa-sm text-white-50"></i> télécharger en Excel</a>
                                                </div>
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Nom complèt</th>
                                                    <th>Poste</th>
                                                    <th>Numéro de phone</th>
                                                    <th>Email</th>
                                                    @if(Auth::user()->role === 'admin')
                                                        <th>Action</th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Nom complèt</th>
                                                    <th>Poste</th>
                                                    <th>Numéro de phone</th>
                                                    <th>Email</th>
                                                    @if(Auth::user()->role === 'admin')
                                                        <th>Action</th>
                                                    @endif
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach ($postulantDevBackend as $participant)
                                                    <tr>
                                                        <td>{{ $participant->fullname }}</td>
                                                        <td>{{ $participant->role }}</td>
                                                        <td>{{ $participant->phone_number }}</td>
                                                        <td>{{ $participant->email }}</td>
                                                        <td><a href="{{ route('user.show', $participant->id) }}" class="btn btn-success">Voir candidature</a></td>
                                                            <!-- @if(Auth::user()->role === 'admin')
                                                                @if($participant->is_active)
                                                                    <td><button class="btn btn-secondary disabled">Candidature validée</button></td>
                                                                @else
                                                                    <td><a href="{{ route('user.activate', $participant->id) }}" class="btn btn-success">Valider candidature</a></td>
                                                                @endif
                                                            @endif -->
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
@endsection