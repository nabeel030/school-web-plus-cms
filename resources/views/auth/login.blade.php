@extends('layouts.guest')

@section('content')

<div class="card shadow-lg border-0 rounded-lg mt-5">
    <div class="card-header">
        <h3 class="text-center font-weight-light my-2">{{ __('Login') }}</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-floating mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                @error('email')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                @error('password')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
