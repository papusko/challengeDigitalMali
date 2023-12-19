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