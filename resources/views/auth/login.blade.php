@extends('auth.layout')

@section('content')
<!-- Card body -->
          <div class="card-body p-6">
            <div class="mb-4">
              <a href="/"><img src="{{asset('assets/images/brand/logo/logo-primary.svg')}}" class="mb-2" alt=""></a>
              <p class="mb-6">Please enter your user information.</p>
            </div>
            <!-- Form -->
            <form action="{{ route('login') }}" method="POST">
              @csrf
              <!-- Username -->
              <div class="mb-3">
                <label for="username" class="form-label">Username or email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                 @error('email')
                      <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                      </div>
                  @enderror
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                      <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                      </div>
                  @enderror
              </div>
              <!-- Checkbox -->
              <div class="d-lg-flex justify-content-between align-items-center
                  mb-4">
                <div class="form-check custom-checkbox">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="rememberme">Remember
                      me</label>
                </div>

              </div>
              <div>
                <!-- Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Entrez</button>
                </div>

                <div class="d-md-flex justify-content-between mt-4">
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