@extends('layouts.app')

@section('content')
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">

    <!-- ============================ COMPONENT REGISTER   ================================= -->
    <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
        <article class="card-body">
            <header class="mb-4"><h4 class="card-title">Sign up</h4></header>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-row">
                    <div class="col form-group">
                        <label>First name</label>
                        <input type="text" placeholder="First name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                        @error('first_name')
                            <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div> <!-- form-group end.// -->
                    <div class="col form-group">
                        <label>Last name</label>
                        <input type="text" placeholder="Last name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">

                        @error('last_name')
                            <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div> <!-- form-group end.// -->
                </div> <!-- form-row end.// -->
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                    @enderror
                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div> <!-- form-group end.// -->
                <div class="form-group">
                    <label class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" checked="" type="radio" name="gender" value="option1">
                        <span class="custom-control-label"> Male </span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input" type="radio" name="gender" value="option2">
                        <span class="custom-control-label"> Female </span>
                    </label>
                </div> <!-- form-group end.// -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>City</label>
                        <input type="text" class="form-control">
                    </div> <!-- form-group end.// -->
                    <div class="form-group col-md-6">
                        <label>Country</label>
                        <select id="inputState" class="form-control">
                        <option> Choose...</option>
                            <option>Uzbekistan</option>
                            <option>Russia</option>
                            <option selected="">Nigeria</option>
                            <option>India</option>
                            <option>Afganistan</option>
                        </select>
                    </div> <!-- form-group end.// -->
                </div> <!-- form-row.// -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Create password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div> <!-- form-group end.// --> 
                    <div class="form-group col-md-6">
                        <label>Repeat password</label>
                        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div> <!-- form-group end.// -->  
                </div>     
                <div class="form-group"> 
                    <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" required> <div class="custom-control-label"> I am agree with <a href="#">terms and contitions</a>  </div> </label>
                </div> <!-- form-group end.// --> 
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Register  </button>
                </div> <!-- form-group// -->           
            </form>
        </article><!-- card-body.// -->
    </div> <!-- card .// -->
    <p class="text-center mt-4">Have an account? <a href="#">Log In</a></p>
    <br><br>
    <!-- ============================ COMPONENT REGISTER  END.// ================================= -->
    
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
@endsection
