@extends('auth.layouts.index')

@section('auth-content')
<div class="container-fluid" style="min-height: 100vh">
    <div class="row">
      <div class="col-lg-7 col-12 text-black m-auto">
        <!-- Login Form Section -->
        <div
          class="d-flex align-items-center h-custom-2 justify-content-center px-lg=5 px-3 mt-5 pt-5 pt-xl-0 mt-xl-n5"
          style="margin-left: -20px">
          @auth
            <div class="col-lg-9 mb-sm-5 mb-0">
              
             <h2 style="font-weight: bold">Hi there!</h2>
             <p style="font-size: 20px">
              Please logout if you wanna login again! 
             </p>

             <button class="btn btn-secondary" onclick="history.back()">Kembali</button>
             <form action="{{ route('handle-logout') }}" class="d-inline" method="POST">
              @csrf  
              <button class="btn text-light" style="background:#05284A;">Logout</button>
             </form>
            </div>
          @else
          <form id="form-login" action="{{ route('handle-login') }}" method="POST">
            @csrf
            <div class="d-flex align-items-lg-center align-items-start mb-4">
              <img src="./img/logo.png" class="me-3" width="40" height="40" alt="">
              <h4 style="font-weight: bold;">HMIF | Catatin!</h4>
            </div>
            <hr>
            <h3 class="fw-normal" style="letter-spacing: 1px">
              Welcome Back 👋
            </h3>
            <p class="fw-normal mb-1 pb-3">
              Please login to have accessbility with your available account!
            </p>

            <div class="form-outline mb-4">
              <label class="form-label" for="nimUser">NIM</label>
              <input type="text" id="nimUser" name="nim" value="{{ old('nim') }}" class="form-control @error('nim') is-invalid @enderror form-control-lg" style="font-size:17px;" placeholder="Enter your nim" />
              @error('nim')
                <span class="text-danger" style="font-size: 13px">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="passwordUser">Password</label>
              <input type="password" id="passwordUser" name="password" class="form-control @error('password') is-invalid @enderror form-control-lg"
                placeholder="Enter your password" style="font-size: 17px;" />
                @error('password')
                  <span class="text-danger" style="font-size: 13px">{{ $message }}</span>
                @enderror
            </div>

            <div class="pt-1 mb-4">
              <button type="submit" class="btn btn-info btn-lg btn-block w-100 text-white" type="button" style="background: #05284A; font-size: 17px;">
                Login
              </button>
            </div>
          </form>
          @endauth
        </div>
      </div>
      <!-- Right Section -->
      <div class="col-lg-5 px-0 d-none d-sm-block position-relative" style="height: 100vh; background: #05284A;">
        <div class="d-flex flex-column position-absolute top-50" style="transform: translate(-20%, -50%)">
          <img src="{{ asset('img/login.png') }}" alt="" class="img-fluid" />
        </div>
      </div>
    </div>
</div> 
@endsection