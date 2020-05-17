@extends('layouts.app')

@section('title') Checkout @endsection

@section('content')
<section class="section-content padding-y">
    <div class="container">
        <form class="" method="POST">
            @csrf
            <div class="row">
                <main class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="text-muted">Billing Information</h6>  
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>First name</label>
                                    <input type="text" placeholder="First name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
            
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> <!-- form-group end.// -->
                                <div class="col form-group">
                                    <label>Last name</label>
                                    <input type="text" placeholder="Last name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">
            
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> <!-- form-group end.// -->
                            </div> <!-- form-row end.// -->
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" placeholder="Address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
                                @error('address')
                                    <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                                @enderror
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
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Phone Number</label>
                                    <input type="tel" placeholder="Phone Number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                
                                    @error('phone')
                                        <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                
                                    @error('email')
                                        <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                                    @enderror
                                    {{-- <small class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                                </div>
                            </div> <!-- form-row end.// -->
                            <div class="form-group">
                                <label>Order Notes</label>
                                <textarea class="form-control" placeholder="Order Notes" rows="11"></textarea>
                            </div>
                        </div>   
                    </div> <!-- card.// -->
        
                    {{-- <div class="alert alert-success mt-3">
                        <p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery within 1-2 weeks</p>
                    </div> --}}
        
                </main> <!-- col.// -->
                <aside class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h6 class="text-muted">Your Order</h6>
                        </div>
                        <div class="card-body">
                            <dl class="dlist-align">
                                <dt>Parameter:</dt>
                                <dd class="text-right">Value Name</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Color:</dt>
                                <dd class="text-right">Orange and Black</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Material:</dt>
                                <dd class="text-right">Leather</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Total Cost:</dt>
                                <dd class="text-right  h5"><strong>NGN 56, 000</strong></dd>
                            </dl>     
                        </div> <!-- card-body.// -->
                    </div>  <!-- card .// -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h6 class="text-muted">Shipment Type</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label><input type="radio" class="form-dcontrol" name=""> Pick Up Station</label>
                            </div>
                            <div class="form-group">
                                <label><input type="radio" class="form-dcontrol" name=""> Home Delivery</label>
                            </div>
                            <div class="form-group">
                                <label><input type="radio" class="form-dcontrol" name=""> Office Delivery</label>
                            </div>
                        </div> <!-- card-body.// -->
                    </div>  <!-- card .// -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h6 class="text-muted">Payment Method</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label><input type="radio" class="" name=""> PayStack</label>
                            </div>
                            <div class="form-group">
                                <label><input type="radio" class="" name=""> Interswitch</label>
                            </div>
                            <div class="form-group">
                                <label><input type="radio" class="" name=""> Payment on Delivery</label>
                            </div>
                        </div> <!-- card-body.// -->
                    </div>  <!-- card .// -->
                    <div class="card mb-3">
                        <button type="submit" class="btn btn-primary"> Place Order</button>
                    </div>  <!-- card .// -->
                </aside> <!-- col.// -->
            </div>
        </form>
    </div>
</section>
@endsection

@section('subscribe')
    @include('partials.frontend._subscribe')
@endsection