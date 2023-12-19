<div class="row mb-3">
                                                    <label for="javascript_frameworks" class="col-md-4 col-form-label text-md-end">{{ __("Quels frameworks JavaScript maîtrisez-vous ? Veuillez les énumérer.") }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="javascript_frameworks" type="textarea" class="form-control @error('javascript_frameworks') is-invalid @enderror" name="javascript_frameworks" value="{{ old('javascript_frameworks') }}" autocomplete="javascript_frameworks" autofocus></textarea>
                                                        @error('javascript_frameworks')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>
                                    <div class="row mb-3">
                                                    <label for="developed_websites" class="col-md-4 col-form-label text-md-end">{{ __("Fournissez des exemples de sites Web que vous avez développés") }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="developed_websites" type="textarea" class="form-control @error('developed_websites') is-invalid @enderror" name="developed_websites" value="{{ old('developed_websites') }}" autocomplete="developed_websites" autofocus></textarea>
                                                        @error('developed_websites')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>
                                    <div class="row mb-3">
                                                    <label for="cross_browser_compatibility" class="col-md-4 col-form-label text-md-end">{{ __("Comment assurez-vous la compatibilité entre différents navigateurs et appareils ?") }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="cross_browser_compatibility" type="textarea" class="form-control @error('cross_browser_compatibility') is-invalid @enderror" name="cross_browser_compatibility" value="{{ old('cross_browser_compatibility') }}" autocomplete="cross_browser_compatibility" autofocus></textarea>
                                                        @error('cross_browser_compatibility')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>
                                    <div class="row mb-3">
                                                    <label for="performance_optimization_approach" class="col-md-4 col-form-label text-md-end">{{ __("Quelle est votre approche pour l'optimisation des performances d'une application web ?") }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="performance_optimization_approach" type="textarea" class="form-control @error('performance_optimization_approach') is-invalid @enderror" name="performance_optimization_approach" value="{{ old('performance_optimization_approach') }}" autocomplete="performance_optimization_approach" autofocus></textarea>
                                                        @error('performance_optimization_approach')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>                                    
                                    <div class="row mb-3">
                                                    <label for="ui_translation_example" class="col-md-4 col-form-label text-md-end">{{ __("Partagez un exemple où vous avez traduit une maquette de design en une interface utilisateur fonctionnelle.") }}</label>

                                                    <div class="col-md-6">
                                                        <textarea id="ui_translation_example" type="textarea" class="form-control @error('ui_translation_example') is-invalid @enderror" name="ui_translation_example" value="{{ old('ui_translation_example') }}" autocomplete="ui_translation_example" autofocus></textarea>
                                                        @error('ui_translation_example')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                    </div>