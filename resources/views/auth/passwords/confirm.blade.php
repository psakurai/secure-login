@extends('layouts.app')
@section('content')
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>
                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}
                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Current Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 to 16 characters" required maxlength="16" minlength="8">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div>
                                <button type="submit" class="button" style="text-align:center; text-decoration:none; font-size:small;color:white" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 to 16 characters" required maxlength="16" minlength="8">
                                    {{ __('Confirm Password') }}
                                </button>
                                </div>
                        </div>
                        <div class="row mb-0">
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
                    </form>
                </div>
            </div>
@endsection
