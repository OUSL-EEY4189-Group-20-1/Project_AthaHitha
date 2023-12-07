@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:180px; align-items:center; justify-content:center; text-align:center;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" ">
                <div class="card-header" style="color:green; font-weight:700; font-size:20px; margin-bottom:40px;" >{{ __('Reset Password') }}</div>

                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end" style="bold:500px; text-align:left; margin-left:13px;">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus 
                                style="border-radius:20px;" placeholder="Type your email here">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="color:white; background-color:green; margin-top:10px; margin-right:50px " >
                                    {{ __('Send Password Reset Link') }}
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
