<div class="row mb-3">
                                                    <label for="programming_languages" class="col-md-4 col-form-label text-md-end">{{ __('Quels langages de programmation serveur maîtrisez-vous ? Veuillez les énumérer.') }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="programming_languages" type="textarea" class="form-control @error('programming_languages') is-invalid @enderror" name="programming_languages" value="{{ old('programming_languages') }}"  autocomplete="programming_languages" autofocus></textarea>
                                                        @error('programming_languages')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>
                                    <div class="row mb-3">
                                                    <label for="database_project_description" class="col-md-4 col-form-label text-md-end">{{ __("Décrivez un projet sur lequel vous avez travaillé qui impliquait la conception et l'implémentation d'une base de données") }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="database_project_description" type="textarea" class="form-control @error('database_project_description') is-invalid @enderror" name="database_project_description" value="{{ old('database_project_description') }}"  autocomplete="database_project_description" autofocus></textarea>
                                                        @error('database_project_description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>
                                    <div class="row mb-3">
                                                    <label for="api_experience" class="col-md-4 col-form-label text-md-end">{{ __("Avez-vous de l'expérience dans le développement d'APIs ? Si oui, veuillez décrire cette expérience.") }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="api_experience" type="textarea" class="form-control @error('api_experience') is-invalid @enderror" name="api_experience" value="{{ old('api_experience') }}" autocomplete="api_experience" autofocus></textarea>
                                                        @error('api_experience')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>
                                    <div class="row mb-3">
                                                    <label for="security_tools" class="col-md-4 col-form-label text-md-end">{{ __("Quels outils de sécurité informatique avez-vous utilisés dans vos projets ?") }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="security_tools" type="textarea" class="form-control @error('security_tools') is-invalid @enderror" name="security_tools" value="{{ old('security_tools') }}" autocomplete="security_tools" autofocus></textarea>
                                                        @error('security_tools')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>                                   
                                    <div class="row mb-3">
                                                    <label for="open_source_projects" class="col-md-4 col-form-label text-md-end">{{ __("Fournissez des liens vers des projets ou contributions à des projets open-source") }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="open_source_projects" type="textarea" class="form-control @error('open_source_projects') is-invalid @enderror" name="open_source_projects" value="{{ old('open_source_projects') }}" autocomplete="open_source_projects" autofocus></textarea>
                                                        @error('open_source_projects')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>
                                    <div class="row mb-3">
                                                    <label for="agile_experience" class="col-md-4 col-form-label text-md-end">{{ __("Expliquez votre expérience avec les méthodologies Agile") }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="agile_experience" type="textarea" class="form-control @error('agile_experience') is-invalid @enderror" name="agile_experience" value="{{ old('agile_experience') }}" autocomplete="agile_experience" autofocus></textarea>
                                                        @error('agile_experience')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>