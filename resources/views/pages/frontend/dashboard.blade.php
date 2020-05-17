@extends('layouts.app')

@section('title') Dashboard @endsection

@section('navbar')
    @include('partials.frontend._navbar')
@endsection
@section('content')
<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">My Account</h2>
    </div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
    
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
    <div class="container">
    
        <div class="row">
            @include('partials.frontend._sidebar')
            <main class="col-md-9">
        
                <article class="card mb-3">
                    <div class="card-body">
                        
                        <figure class="icontext">
                                <div class="icon">
                                    <img class="rounded-circle img-sm border" src="{{ asset('frontend/images/users/avatar3.jpg') }}">
                                </div>
                                <div class="text">
                                    <strong> {{ App\Models\User::fullName(auth()->user()->id) }} </strong> <br> 
                                    {{ auth()->user()->email }} <br> 
                                    <a href="{{ url('settings') }}">Edit Profile</a>
                                </div>
                        </figure>
                        <hr>
                        <p>
                            <i class="fa fa-map-marker text-muted"></i> &nbsp; My address:  
                            <br>
                            Tashkent city, Street name, Building 123, House 321 &nbsp; 
                            <a href="{{ url('settings') }}" class="btn-link"> Edit Address</a>
                        </p>
        
                        
        
                        <article class="card-group">
                            <figure class="card bg">
                                <div class="p-3">
                                    <h5 class="card-title">38</h5>
                                    <span>Orders</span>
                                </div>
                            </figure>
                            <figure class="card bg">
                                <div class="p-3">
                                    <h5 class="card-title">5</h5>
                                    <span>Wishlists</span>
                                </div>
                            </figure>
                            <figure class="card bg">
                                <div class="p-3">
                                    <h5 class="card-title">12</h5>
                                    <span>Awaiting delivery</span>
                                </div>
                            </figure>
                            <figure class="card bg">
                                <div class="p-3">
                                    <h5 class="card-title">50</h5>
                                    <span>Delivered items</span>
                                </div>
                            </figure>
                        </article>
                        
        
                    </div> <!-- card-body .// -->
                </article> <!-- card.// -->
        
                <article class="card  mb-3">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Recent orders </h5>	
        
                        <div class="row">
                        <div class="col-md-6">
                            <figure class="itemside  mb-3">
                                <div class="aside"><img src="{{ asset('frontend/images/products/1.jpg') }}" class="border img-sm"></div>
                                <figcaption class="info">
                                    <time class="text-muted"><i class="fa fa-calendar-alt"></i> 12.09.2019</time>
                                    <p>Great item name goes here </p>
                                    <span class="text-warning">Pending</span>
                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->
                        <div class="col-md-6">
                            <figure class="itemside  mb-3">
                                <div class="aside"><img src="{{ asset('frontend/images/products/2.jpg') }}" class="border img-sm"></div>
                                <figcaption class="info">
                                    <time class="text-muted"><i class="fa fa-calendar-alt"></i> 12.09.2019</time>
                                    <p>Machine for kitchen to blend </p>
                                    <span class="text-success">Departured</span>
                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->
                        <div class="col-md-6">
                            <figure class="itemside mb-3">
                                <div class="aside"><img src="{{ asset('frontend/images/products/3.jpg') }}" class="border img-sm"></div>
                                <figcaption class="info">
                                    <time class="text-muted"><i class="fa fa-calendar-alt"></i> 12.09.2019</time>
                                    <p>Ladies bag original leather </p>
                                    <span class="text-success">Shipped  </span>
                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->
                    </div> <!-- row.// -->
        
                    <a href="{{ url('orders') }}" class="btn btn-outline-primary"> See all orders  </a>
                    </div> <!-- card-body .// -->
                </article> <!-- card.// -->
        
            </main> <!-- col.// -->
        </div>
    
    </div> <!-- container .//  -->
</section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
@endsection

@section('subscribe')
    @include('partials.frontend._subscribe')
@endsection