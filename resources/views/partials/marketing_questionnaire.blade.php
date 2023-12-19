<div class="row mb-3">
                                                    <label for="digital_marketing_campaign" class="col-md-4 col-form-label text-md-end">{{ __("Décrivez une campagne de marketing digital que vous avez gérée.") }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="digital_marketing_campaign" type="textarea" class="form-control @error('digital_marketing_campaign') is-invalid @enderror" name="digital_marketing_campaign" value="{{ old('digital_marketing_campaign') }}" autocomplete="digital_marketing_campaign" autofocus></textarea>
                                                        @error('digital_marketing_campaign')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>

                                    <div class="row mb-3">
                                                    <label for="commercial_plan" class="col-md-4 col-form-label text-md-end">{{ __("Décrivez un plan commercial que vous avez développé.") }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="commercial_plan" type="textarea" class="form-control @error('commercial_plan') is-invalid @enderror" name="commercial_plan" value="{{ old('commercial_plan') }}" autocomplete="commercial_plan" autofocus></textarea>
                                                        @error('commercial_plan')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>

                                    <div class="row mb-3">
                                                    <label for="communication_strategy_effectiveness_measurement" class="col-md-4 col-form-label text-md-end">{{ __("Comment mesureriez-vous l'efficacité d'une stratégie de communication ?") }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="communication_strategy_effectiveness_measurement" type="textarea" class="form-control @error('communication_strategy_effectiveness_measurement') is-invalid @enderror" name="communication_strategy_effectiveness_measurement" value="{{ old('communication_strategy_effectiveness_measurement') }}" autocomplete="communication_strategy_effectiveness_measurement" autofocus></textarea>
                                                        @error('communication_strategy_effectiveness_measurement')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>

                                    <div class="row mb-3">
                                                    <label for="crm_experience" class="col-md-4 col-form-label text-md-end">{{ __(". Avez-vous de l'expérience avec les outils de CRM ? Si oui, avec quels outils ?") }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="crm_experience" type="textarea" class="form-control @error('crm_experience') is-invalid @enderror" name="crm_experience" value="{{ old('crm_experience') }}" autocomplete="crm_experience" autofocus></textarea>
                                                        @error('crm_experience')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>