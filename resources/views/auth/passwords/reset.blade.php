@extends('auth.layout')

@section('content')
<div class="card-body p-6">
            <div class="mb-4">
              <a href="/"><img src="{{asset('assets/images/brand/logo/logo-primary.svg')}}" class="mb-2" alt=""></a>
              <p class="mb-6">Please enter your user information.</p>

            </div>
            <!-- Form -->
            <form method="POST" action="{{ route('password.update') }}">
               @csrf
               <input type="hidden" name="token" value="{{ $token }}">
              <!-- Email -->
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                      <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                      </div>
                  @enderror
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                      <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                      </div>
                  @enderror
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                @error('password_confirmation')
                      <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                      </div>
                  @enderror
              </div>
              <div>
                <div class="d-md-flex justify-content-between mt-4">
                  <div class="mb-2 mb-md-0">
                    <a href="{{ route('login') }}" class="fs-5">Vous avez déja un compte? Entrez</a>
                  </div>
                </div>
              </div>

            </form>
          </div>
@endsection