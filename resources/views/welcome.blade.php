@extends('layouts.app')

@section('content')
            <div class="card" style="width:100%;">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-2">
                            <div>
                                <input id="email" type="email" class="form-field form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email"  title="Must contain at most 50 characters" maxlength="50">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>

                        <div class="row mb-2">
                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 to 16 characters" required maxlength="16" minlength="8">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>

                        <div  class="row mb-0">
                            <div>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    </div>
                        </div>

                        <div  class="row mb-0">
                            <div>
                            <button type="submit" class="button" style="text-align:center; text-decoration:none; font-size:small;color:white">
                                    {{ __('Login') }}
                                </button>
                            </div>
                                
                                </div>
                                <div  class="row mb-0">
                                    <div>
                                    @if (Route::has('password.request'))
                                <button class="button">
                                <a href="{{ route('password.request') }}" style="text-align:center; text-decoration:none; font-size:small;color:white">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </button>
                                    
                                @endif
                                    </div>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
