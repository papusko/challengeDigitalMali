<div class="row mb-3">
                                                    <label for="financial_forecasting" class="col-md-4 col-form-label text-md-end">{{ __('Comment établissez-vous des prévisions financières pour une nouvelle entreprise ?') }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="financial_forecasting" type="textarea" class="form-control @error('financial_forecasting') is-invalid @enderror" name="financial_forecasting" value="{{ old('financial_forecasting') }}"  autocomplete="financial_forecasting" autofocus></textarea>
                                                        @error('financial_forecasting')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>
                                    <div class="row mb-3">
                                                    <label for="startup_financing_experience" class="col-md-4 col-form-label text-md-end">{{ __("Avez-vous de l'expérience dans la recherche de financements pour des startups ? Donnez des détails.") }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="startup_financing_experience" type="textarea" class="form-control @error('startup_financing_experience') is-invalid @enderror" name="startup_financing_experience"  autocomplete="startup_financing_experience" autofocus>{{ old('startup_financing_experience') }}</textarea>
                                                        @error('startup_financing_experience')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>
                                    <div class="row mb-3">
                                                    <label for="financial_project_risk_evaluation" class="col-md-4 col-form-label text-md-end">{{ __(" Comment évaluez-vous les risques financiers d'un projet ?") }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="financial_project_risk_evaluation" type="textarea" class="form-control @error('financial_project_risk_evaluation') is-invalid @enderror" name="financial_project_risk_evaluation"  autocomplete="financial_project_risk_evaluation" autofocus>{{ old('financial_project_risk_evaluation') }}</textarea>
                                                        @error('financial_project_risk_evaluation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="finance_accounting_tools" class="col-md-4 col-form-label text-md-end">{{ __('Quels outils de finance et de comptabilité utilisez-vous régulièrement ?') }}</label>

                                        <div class="col-md-6">
                                            <textarea id="finance_accounting_tools" class="form-control @error('finance_accounting_tools') is-invalid @enderror" name="finance_accounting_tools"  autocomplete="finance_accounting_tools" autofocus>{{ old('finance_accounting_tools') }}</textarea>
                                            @error('finance_accounting_tools')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>