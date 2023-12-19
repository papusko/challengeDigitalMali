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

                        
                        <!-- company_name -->
<div class="row mb-3  company-fields" style="display: {{ old('work_in_company') == 1 ? 'block' : 'none' }}">
    <label for="company_name" class="col-md-3 col-form-label text-md-end">{{ __('Nom de l\'entreprise') }}</label>

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