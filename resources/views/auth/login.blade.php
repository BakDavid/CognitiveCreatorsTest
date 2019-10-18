@extends('layouts.app')

@section('content')
<div class="container">
    <div style="text-align:center;">
        <img style="width:20%;height:20%;" src="{{ asset('images/cognitive-creators.png') }}"/>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('loginCheck') }}">
                        @csrf

                        <h2 style="display: :block;text-align:center;color:grey;">{{ __('Welcome!') }}</h2>
                        <p style="display: :block;text-align:center;">{{ __('Please fill in your email address') }}</p>
                        <div style="justify-content: center;" class="form-group row">
                                <input id="email" type="email" style="width:90%;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div style="justify-content: center;">
                            <button style="width:100%;margin-bottom:10px;" type="submit" class="btn btn-primary">
                                {{ __('Continue') }}
                            </button>
                        </div>
                        <p style="display: :block;text-align:center;margin-bottom: 0px;">{{ __("Don't haven an account yet?") }}</p>
                        <p style="display: :block;text-align:center;">{{ __("You can create one in the next step.") }}</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <p style="display: :block;text-align:center;margin-top: 15px;">{{ __("Need help?") }}</p>
</div>
@endsection
