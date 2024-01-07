
@extends('admin.dashboard')

    @section('contenu')
                    <!-- Content Row -->

                    <!-- dashboard and statistique  -->

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tableau de bord </h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                participant en finance ou gestion d'entreprise</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $nombrePostulantFinance }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Spécialiste en marketing ou communication</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $nombrePostulantMarketing }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Developpeur frontend
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $nombrePostulantDevFrontend }}</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Developpeur backend</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $nombrePostulantDevBackend }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end dashboard and statistique  -->

                    <div class="row">
                    <div class="container-fluid">


<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des postulants</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> </h1>
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
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
                    @foreach ($postulant as $participant)
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
