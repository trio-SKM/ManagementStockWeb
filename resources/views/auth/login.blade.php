@extends('auth.layout')

@section('content')
<!-- Card body -->
          <div class="card-body p-6">
            @error('email')
            <!-- Dismissing alert -->

 <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Email ou Mot de pass !!</strong> incorrect essyez une autre fois
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
            @enderror
            <div class="mb-4">
              <a href="../index.html"><img src="../assets/images/brand/logo/logo-primary.svg" class="mb-2" alt=""></a>
              <p class="mb-6">Please enter your user information.</p>
            </div>
            <!-- Form -->
            <form action="{{route('login')}}" method="post">
              @csrf
              <!-- Username -->
              <div class="mb-3">
                <label for="username" class="form-label">Username or email</label>
                <input type="email" id="username" class="form-control" name="email" placeholder="Votre email ici" required="">
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="**************" required="">
              </div>
              <!-- Checkbox -->
              <div class="d-lg-flex justify-content-between align-items-center
                  mb-4">
                <div class="form-check custom-checkbox">
                  <input type="checkbox" class="form-check-input" id="rememberme">
                  <label class="form-check-label" for="rememberme">Remember
                      me</label>
                </div>

              </div>
              <div>
                <!-- Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Entrez</button>
                </div>
              </div>


            </form>
            
          </div>
@endsection