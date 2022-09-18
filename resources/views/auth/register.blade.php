@extends('auth.layout')

@section('content')
<div class="card-body p-6">
            <div class="mb-4">
              <a href="/"><img src="{{asset('assets/images/brand/logo/logo-primary.svg')}}" class="mb-2" alt=""></a>
              <p class="mb-6">Please enter your user information.</p>

            </div>
            <!-- Form -->
            <form method="POST" action="{{ route('register') }}">
              <!-- Username -->
              <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                      <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                      </div>
                @enderror
              </div>
              <!-- Email -->
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                <label for="confirm-password" class="form-label">Confirm
                    Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                @error('password_confirmation')
                      <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                      </div>
                  @enderror
              </div>
              <div>
                <!-- Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">
                    Crée Compte
                  </button>
                </div>

                <div class="d-md-flex justify-content-between mt-4">
                  <div class="mb-2 mb-md-0">
                    <a href="{{ route('login') }}" class="fs-5">Vous avez déja un compte? Entrez</a>
                  </div>
                  <div>
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-inherit
                        fs-5">J'ai oublié mon mot de pass?</a>
                    @endif
                  </div>

                </div>
              </div>

            </form>
          </div>
@endsection