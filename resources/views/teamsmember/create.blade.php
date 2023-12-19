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

    <form method="post" action="{{ route('teams_member.store') }}">
        @csrf
        <div class="form-group">
            <input type="hidden" name="team_id" value="{{ $team->id }}">
        </div>
        <div class="form-group">
            <label for="user_id">Sélectionner un utilisateur :</label>
            <select id="user_id" name="user_id" class="form-control">
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->fullname }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group" hidden>
            <label for="role_in_team">Rôle dans l'équipe :</label>
            <input type="text" class="form-control" name="role_in_team" value='member' required />
        </div>
        <button type="submit" class="btn btn-primary">Ajouter membre</button>
    </form>

</div>
@endsection
