@extends('layouts.reussie')

@section('content')
<div class="card">
  <h5 class="card-header">Inscription réussie</h5>
  <div class="card-body">
    <h5 class="card-title">Félicitation votre participation à été prise en compte</h5>
    <p class="card-text">Merci pour votre inscription un mail vous sera envoyé dès que votre canditature sera valide merci de visiter notre site </p>
    @auth
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-primary" type="submit">Aller vers le site </button>
    </form>
@endauth
  </div>
</div>

@endsection
