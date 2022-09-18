@extends('auth.layout')

@section('content')
<div class="card-body p-6">
            <div class="mb-4">
              <a href="/"><img src="{{asset('assets/images/brand/logo/logo-primary.svg')}}" class="mb-2" alt=""></a>
              <p class="mb-6">Don't worry, we'll send you an email to reset your password.
              </p>
            </div>
             @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif
            <!-- Form -->
            <form method="POST" action="{{ route('password.email') }}">
               @csrf
              <!-- Email -->
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <!-- Button -->
              <div class="mb-3 d-grid">
                <button type="submit" class="btn btn-primary">
                    Envoyer Email de Récuperation
                  </button>
              </div>
              <span>Vous avez déja un compte? <a href="sign-in.html">Entrez</a></span>
            </form>
          </div>
@endsection