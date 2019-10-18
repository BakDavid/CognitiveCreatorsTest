@extends('layouts.app')

@section('content')
<div class="container">
    <div style="text-align:center;">
        <img style="width:20%;height:20%;" src="{{ asset('images/cognitive-creators.png') }}"/>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">

                @if ($errors->has('password'))
                <div class="alert alert-danger alert-dismissible">
                    <div class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" autofocus>
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{ $errors->first('password') }}</strong>
                    </div>
                </div>
                @endif

                <div class="card-body">
                    <form method="POST" action="{{ route('registerPost') }}">
                        @csrf

                        <h2 style="display: :block;text-align:center;color:grey;">{{ __('Register!') }}</h2>
                        <p style="display: :block;text-align:center;">{{ __('Please fill in your name') }}</p>
                        <div style="justify-content: center;" class="form-group row">
                            <input id="name" type="text" style="width:90%;" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>

                        <p style="display: :block;text-align:center;">{{ __('Please fill in your password') }}</p>
                        <div style="justify-content: center;" class="form-group row">
                                <input id="password" type="password" style="width:90%;" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                        </div>

                        <p style="display: :block;text-align:center;">{{ __('Please fill in your password again') }}</p>
                        <div style="justify-content: center;" class="form-group row">
                                <input id="password-confirm" type="password" style="width:90%;" class="form-control @error('password-confirm') is-invalid @enderror" name="password-confirm" value="{{ old('password-confirm') }}" required autocomplete="password-confirm" autofocus>
                        </div>

                        <div style="justify-content: center;">
                            <button style="width:100%;margin-bottom:10px;" type="submit" class="btn btn-primary">
                                {{ __('Continue') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <p style="display: :block;text-align:center;margin-top: 15px;">{{ __("Need help?") }}</p>
</div>
@endsection
