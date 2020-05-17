@extends('layouts.app')

@section('content')
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-conten padding-y" style="min-height:84vh">
    <!-- ============================ COMPONENT LOGIN   ================================= -->
        <div class="card mx-auto" style="max-width: 380px; margin-top:30px;">
            <div class="card-body">
                <h4 class="card-title mb-4">Sign in</h4>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" type="text" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <input placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div> <!-- form-group// -->
                    
                    <div class="form-group">
                        @if (Route::has('password.request'))
                            <a class="float-right" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif 
                        <label class="float-left custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" checked="" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <div class="custom-control-label"> Remember Me</div> 
                        </label>
                    </div> <!-- form-group form-check .// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                    </div> <!-- form-group// -->
                    <hr>
                    <a href="#" class="btn btn-facebook btn-block mb-2"> <i class="fab fa-facebook-f"></i> &nbsp  Sign in with Facebook</a>
                    <a href="#" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp  Sign in with Google</a>  
                </form>
            </div> <!-- card-body.// -->
        </div> <!-- card .// -->
        <p class="text-center mt-4">Don't have account? <a href="{{ route('register') }}">Sign up</a></p>
        <br><br>
    <!-- ============================ COMPONENT LOGIN  END.// ================================= -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
@endsection
