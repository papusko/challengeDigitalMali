@extends('layouts.app')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="{{ asset('assets/img/logocdm.jpeg') }}" alt=""/>
                        <h3>Challenge Mali Digital</h3>
                        <p>Inscrivez-vous !</p>
                         <input type="submit" name="" value="Voir le site"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                  

                <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3 step" id="step1">
                            @include('partials.personal_information')
                        </div>


               
                        <div class="row mb-3 step" id="step2" >
                            @include('partials.postulant_role')
                        </div>

                        <div class="row mb-3 step" id="step3" >
                            @include('partials.school_experience')
                        </div>

                            <!-- work_in_company -->
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

                        <div class="row mb-3">
                            <label for="highest_education_level" class="col-md-4 col-form-label text-md-end">{{ __('Plus haut niveau d\'études atteint') }}</label>
                            <div class="col-md-6">
                                <input id="highest_education_level" type="text" class="form-control @error('highest_education_level') is-invalid @enderror" name="highest_education_level" value="{{ old('highest_education_level') }}" autocomplete="highest_education_level" autofocus>
                                @error('highest_education_level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        


                        <div class="row mb-3">
                            <label for="institution_and_program" class="col-md-4 col-form-label text-md-end">{{ __('Institut ou programme') }}</label>
                            <div class="col-md-6">
                                <input id="institution_and_program" type="text" class="form-control @error('institution_and_program') is-invalid @enderror" name="institution_and_program" value="{{ old('institution_and_program') }}" autocomplete="institution_and_program" autofocus>
                                @error('institution_and_program')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="graduation_year" class="col-md-4 col-form-label text-md-end">{{ __('Année') }}</label>
                            <div class="col-md-6">
                                <input id="graduation_year" type="year" class="form-control @error('graduation_year') is-invalid @enderror" name="graduation_year" value="{{ old('graduation_year') }}" autocomplete="graduation_year" autofocus>
                                @error('graduation_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


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
                                    {{ __('Postuler') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- @dump($errors) -->
                </div>
            </div>
        </div>
    

</div>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const workInCompanyYes = document.getElementById('work_yes');
        const workInCompanyNo = document.getElementById('work_no');
        const companyFields = document.querySelectorAll('.company-fields');

        function updateCompanyFieldsDisplay() {
            companyFields.forEach(field => {
                field.style.display = workInCompanyYes.checked ? 'block' : 'none';
            });
        }

        workInCompanyYes.addEventListener('change', updateCompanyFieldsDisplay);
        workInCompanyNo.addEventListener('change', updateCompanyFieldsDisplay);

        // Appel initial pour configurer l'affichage au chargement de la page
        updateCompanyFieldsDisplay();
    });
</script>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



<script>
    $(document).ready(function () {
        $('#role').change(function () {
            // Masquer toutes les sections
            $('#financierSection, #backendDevSection, #frontendDevSection, #marketingSection').hide();

            // Afficher la section correspondant au rôle sélectionné
            var selectedRole = $(this).val();
            if (selectedRole === 'financier') {
                $('#financierSection').show();
            } else if (selectedRole === 'backend_dev') {
                $('#backendDevSection').show();
            } else if (selectedRole === 'frontend_dev') {
                $('#frontendDevSection').show();
            } else if (selectedRole === 'marketing') {
                $('#marketingSection').show();
            }
        });
    });
</script>