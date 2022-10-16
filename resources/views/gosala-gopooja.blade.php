
@extends('layouts.gorashanam')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 card-container">
            <div class="card">
                <div class="card-header">{{ __('Request for event : ') }} {{ __('Gosala Vishnupuram: Go Pooja') }}</div>

                <div class="card-body happy">
                    <form method="POST" action="{{ route('gosala.addevent') }}">
                        @csrf

                        <input type="text" name="user_id" value="{{ auth()->user()->id }}" hidden>
                        <input type="text" name="event_type" value="gopooja" hidden>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="go_pooja_reason"
                                class="col-md-4 col-form-label text-md-right">{{ __('Go Pooja Reason') }}</label>

                            <div class="col-md-6">
                                <input id="go_pooja_reason" type="text"
                                    class="form-control @error('go_pooja_reason') is-invalid @enderror"
                                    name="go_pooja_reason" value="{{ old('go_pooja_reason') }}" required
                                    autocomplete="go_pooja_reason" autofocus>

                                @error('go_pooja_reason')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="star" class="col-md-4 col-form-label text-md-right">{{ __('Star') }}</label>

                            <div class="col-md-6">
                                <input id="star" type="text" class="form-control @error('star') is-invalid @enderror"
                                    name="star" value="{{ old('star') }}" required autocomplete="star" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rashi" class="col-md-4 col-form-label text-md-right">{{ __('Rashi') }}</label>

                            <div class="col-md-6">
                                <input id="rashi" type="text" class="form-control @error('rashi') is-invalid @enderror"
                                    name="rashi" value="{{ old('rashi') }}" required autocomplete="rashi" autofocus>

                                @error('rashi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gothram"
                                class="col-md-4 col-form-label text-md-right">{{ __('Gotharam') }}</label>

                            <div class="col-md-6">
                                <input id="gothram" type="text"
                                    class="form-control @error('gothram') is-invalid @enderror" name="gothram"
                                    value="{{ old('gothram') }}" required autocomplete="gothram" autofocus>

                                @error('gothram')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('Tamil Date') }}</label>

                            <div class="col-md-6">
                                <input id="tamil_date" type="date"
                                    class="form-control @error('tamil_date') is-invalid @enderror" name="tamil_date"
                                    value="{{ old('tamil_date') }}" required autocomplete="tamil_date" autofocus>

                                @error('tamil_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('Mobile No.') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="number"
                                    class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                    value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

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
                                <textarea class="form-control @error('email') is-invalid @enderror" name="address"
                                    value="{{ old('address') }}" required autocomplete="address" autofocus></textarea>

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