<div class="row mb-3">
<label for="role" class="col-md-4 col-form-label text-md-end">Rôle :</label>
                            <div class="form-group col-md-6">
                                
                                <select id="role" class="form-control @error('role') is-invalid @enderror" name="role" required autocomplete="role" autofocus>
                                    <option value="" disabled selected>Sélectionnez un rôle</option>
                                    <option value="financier" {{ old('role') === 'financier' ? 'selected' : '' }}>Financier</option>
                                    <option value="backend_dev" {{ old('role') === 'backend_dev' ? 'selected' : '' }}>Développeur Backend</option>
                                    <option value="frontend_dev" {{ old('role') === 'frontend_dev' ? 'selected' : '' }}>Développeur Frontend</option>
                                    <option value="marketing" {{ old('role') === 'marketing' ? 'selected' : '' }}>Marketing</option>
                                </select>
                                @error('role')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                          <!-- Sections de formulaire -->
                        <div class="row mb-3" id="financierSection" style="display: none;">
                                    @include('partials.financier_questionnaire')
                        </div>

                        <div class="row mb-3" id="backendDevSection" style="display: none;">
                                    @include('partials.backend_questionnaire')
                        </div>

                        <div class="row mb-3" id="frontendDevSection" style="display: none;">
                            @include('partials.frontend_questionnaire')        
                        </div>

                        <div class="row mb-3" id="marketingSection" style="display: none;">
                            @include('partials.marketing_questionnaire')
                        </div>


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