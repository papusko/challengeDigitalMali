@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.users.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="fullname" class="col-md-4 col-form-label text-md-end">{{ __('Nom Complet') }}</label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>

                                @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Adresse et region -->
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="region" class="col-md-4 col-form-label text-md-end">{{ __('Région') }}</label>

                            <div class="col-md-6">
                                <input id="region" type="text" class="form-control @error('region') is-invalid @enderror" name="region" value="{{ old('region') }}" required autocomplete="region">

                                @error('region')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end -->

                        <!-- motivation et phone number -->
                        <div class="row mb-3">
                            <label for="motivation" class="col-md-4 col-form-label text-md-end">{{ __('Votre motivation') }}</label>

                            <div class="col-md-6">
                                <textarea id="motivation" type="textarea" class="form-control @error('motivation') is-invalid @enderror" name="motivation" value="{{ old('motivation') }}" required autocomplete="motivation" autofocus></textarea>
                                @error('motivation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-end">{{ __('Numéro de téléphone') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end -->

                        <div class="row mb-3">
    <label class="col-md-4 col-form-label text-md-end">{{ __('Travaillez-vous dans une entreprise ?') }}</label>

    <div class="col-md-6">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="work_in_company" id="work_yes" value="1" {{ old('work_in_company') == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="work_yes">Oui</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="work_in_company" id="work_no" value="0" {{ old('work_in_company') == 0 ? 'checked' : '' }}>
            <label class="form-check-label" for="work_no">Non</label>
        </div>

        @error('work_in_company')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<!-- company_name -->
<div class="row mb-3 company-fields" style="display: {{ old('work_in_company') == 1 ? 'block' : 'none' }}">
    <label for="company_name" class="col-md-4 col-form-label text-md-end">{{ __('Nom de l\'entreprise') }}</label>

    <div class="col-md-6">
        <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" autocomplete="company_name" autofocus>

        @error('company_name')
            <div class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
    </div>
</div>

<!-- tasks_description -->
<div class="row mb-3 company-fields" style="display: {{ old('work_in_company') == 1 ? 'block' : 'none' }}">
    <label for="tasks_description" class="col-md-4 col-form-label text-md-end">{{ __('Description des tâches') }}</label>

    <div class="col-md-6">
        <textarea id="tasks_description" type="textarea" class="form-control @error('tasks_description') is-invalid @enderror" name="tasks_description" autocomplete="tasks_description" autofocus>{{ old('tasks_description') }}</textarea>

        @error('tasks_description')
            <div class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </div>
        @enderror
    </div>
</div>

<!-- role  -->
<div class="row mb-3">
    <label class="col-md-4 col-form-label text-md-end">{{ __('Rôle') }}</label>

    <div class="col-md-6">
        <input type="hidden" name="role" value="admin">
        <span>Admin</span>
    </div>
</div>
<!-- endrole  -->

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    @dump($errors)
                </div>
            </div>
        </div>
    </div>
</div>
@endsection