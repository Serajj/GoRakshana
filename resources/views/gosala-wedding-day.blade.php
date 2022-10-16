
@extends('layouts.gorashanam')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 card-container">
            <div class="card">
                <div class="card-header">{{ __('Request for event : ') }} {{ __('Wedding day') }}</div>

                <div class="card-body happy">
                    <form method="POST" action="{{ route('gosala.addevent') }}">
                        @csrf

                        <input type="text" name="user_id" value="{{ auth()->user()->id }}" hidden>
                        <input type="text" name="event_type" value="wedding" hidden>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control @error('email') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="husband_star" class="col-md-4 col-form-label text-md-right">{{ __('Husband Star') }}</label>

                            <div class="col-md-6">
                                <input id="husband_star" type="text" class="form-control @error('husband_star') is-invalid @enderror" name="husband_star" value="{{ old('husband_star') }}" required autocomplete="husband_star" autofocus>

                                @error('husband_star')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="husband_rasi" class="col-md-4 col-form-label text-md-right">{{ __('Husband Rasi') }}</label>

                            <div class="col-md-6">
                                <input id="husband_rasi" type="text" class="form-control @error('husband_rasi') is-invalid @enderror" name="husband_rasi" value="{{ old('husband_rasi') }}" required autocomplete="husband_rasi" autofocus>

                                @error('husband_rasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="husband_gotharam" class="col-md-4 col-form-label text-md-right">{{ __('Husband Gothram') }}</label>

                            <div class="col-md-6">
                                <input id="husband_gotharam" type="text" class="form-control @error('husband_gotharam') is-invalid @enderror" name="husband_gotharam" value="{{ old('husband_gotharam') }}" required autocomplete="husband_gotharam" autofocus>

                                @error('husband_gotharam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="wifi_star" class="col-md-4 col-form-label text-md-right">{{ __('Wife Star') }}</label>

                            <div class="col-md-6">
                                <input id="wifi_star" type="text" class="form-control @error('wifi_star') is-invalid @enderror" name="wifi_star" value="{{ old('gothwifi_starram') }}" required autocomplete="wifi_star" autofocus>

                                @error('wifi_star')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Tamil Date') }}</label>

                            <div class="col-md-6">
                                <input id="tamil_date" type="date" class="form-control @error('tamil_date') is-invalid @enderror" name="tamil_date" value="{{ old('tamil_date') }}" required autocomplete="tamil_date" autofocus>

                                @error('tamil_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No.') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control @error('email') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus></textarea>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       

</hr>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="submit_btn">
                                    {{ __('Submit Request') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
