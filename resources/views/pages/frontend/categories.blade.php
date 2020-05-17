@extends('layouts.app')

@section('title') Categories @endsection

@section('content')
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
    <div class="container">
        <!-- ============================  FILTER TOP  ================================= -->
        <div class="card mb-3">
            <div class="card-body">
                <ol class="breadcrumb float-left">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="#">Categories</a></li>
                </ol>
            </div> <!-- card-body .// -->
        </div> <!-- card.// -->
        <!-- ============================ FILTER TOP END.// ================================= -->
    <nav class="row">
            <div class="col-md-3">
                
                <div class="card card-category">
                  <div class="img-wrap" style="background: #ffd7d7">
                      <img src="{{ asset('frontend/images/items/1.jpg') }}">
                  </div>
                  <div class="card-body">
                    <h4 class="card-title"><a href="{{ url('catalog-list') }}">Summer shirts</a></h4>
                    <ul class="list-menu">
                        <li><a href="{{ url('catalog-list') }}">Unisex T shirts</a></li>
                        <li><a href="{{ url('catalog-list') }}">Casual shirts</a></li>
                        <li><a href="{{ url('catalog-list') }}">Scherf Ice cream</a></li>
                        <li><a href="{{ url('catalog-list') }}">Another category</a></li>
                        <li><a href="{{ url('catalog-list') }}">Great items name</a></li>
                        <li><a href="{{ url('catalog-list') }}">Great items name</a></li>
                    </ul>
                  </div>
                </div>
            </div> <!-- col.// -->
            <div class="col-md-3">
                <div class="card card-category">
                  <div class="img-wrap" style="background: #FFF68D">
                      <img src="{{ asset('frontend/images/items/2.jpg') }}">
                  </div>
                  <div class="card-body">
                    <h4 class="card-title"><a href="{{ url('catalog-list') }}">Winter jackets</a></h4>
                    <ul class="list-menu">
                        <li><a href="{{ url('catalog-list') }}">Leather jackets</a></li>
                        <li><a href="{{ url('catalog-list') }}">Men's jackets</a></li>
                        <li><a href="{{ url('catalog-list') }}">Heating battery clothes</a></li>
                        <li><a href="{{ url('catalog-list') }}">Jeans jackets</a></li>
                        <li><a href="{{ url('catalog-list') }}">Great items name</a></li>
                    </ul>
                  </div>
                </div>
            </div> <!-- col.// -->
            <div class="col-md-3">
                <div class="card card-category">
                  <div class="img-wrap" style="background: #bcffb8">
                      <img src="{{ asset('frontend/images/items/3.jpg') }}">
                  </div>
                  <div class="card-body">
                    <h4 class="card-title"><a href="{{ url('catalog-list') }}">Shorts</a></h4>
                    <ul class="list-menu">
                        <li><a href="{{ url('catalog-list') }}">Jeans shorts</a></li>
                        <li><a href="{{ url('catalog-list') }}">Swimming shorts</a></li>
                        <li><a href="{{ url('catalog-list') }}">Another some shorts</a></li>
                        <li><a href="{{ url('catalog-list') }}">Another category</a></li>
                    </ul>
                  </div>
                </div>
            </div> <!-- col.// -->
            <div class="col-md-3">
                <div class="card card-category">
                  <div class="img-wrap" style="background: #c9fff3">
                      <img src="{{ asset('frontend/images/items/4.jpg') }}">
                  </div>
                  <div class="card-body">
                    <h4 class="card-title"><a href="{{ url('catalog-list') }}">Travel bags </a></h4>
                    <ul class="list-menu">
                        <li><a href="{{ url('catalog-list') }}">Leather bags</a></li>
                        <li><a href="{{ url('catalog-list') }}">Cook & Hold ovens</a></li>
                        <li><a href="{{ url('catalog-list') }}">Scherf Ice cream</a></li>
                        <li><a href="{{ url('catalog-list') }}">Another category</a></li>
                        <li><a href="{{ url('catalog-list') }}">Great items name</a></li>
                    </ul>
                  </div>
                </div>
            </div> <!-- col.// -->
            <div class="col-md-3">
                <div class="card card-category">
                  <a href="#" class="img-wrap" style="background: #ddffeb">
                      <img src="{{ asset('frontend/images/items/5.jpg') }}">
                  </a>
                  <div class="card-body">
                    <h4 class="card-title"><a href="{{ url('catalog-list') }}">Great items</a></h4>
                    <ul class="list-menu">
                        <li><a href="{{ url('catalog-list') }}">Combi steamers</a></li>
                        <li><a href="{{ url('catalog-list') }}">Cook & Hold ovens</a></li>
                        <li><a href="{{ url('catalog-list') }}">Scherf Ice cream</a></li>
                        <li><a href="{{ url('catalog-list') }}">Another category</a></li>
                        <li><a href="{{ url('catalog-list') }}">Great items name</a></li>
                    </ul>
                  </div>
                </div>
            </div> <!-- col.// -->
            <div class="col-md-3">
                <div class="card card-category">
                  <a href="#" class="img-wrap" style="background: #dee4ff">
                      <img src="{{ asset('frontend/images/items/6.jpg') }}">
                  </a>
                  <div class="card-body">
                    <h4 class="card-title"><a href="{{ url('catalog-list') }}">Kitchen furniture</a></h4>
                    <ul class="list-menu">
                        <li><a href="{{ url('catalog-list') }}">Combi steamers</a></li>
                        <li><a href="{{ url('catalog-list') }}">Cook & Hold ovens</a></li>
                        <li><a href="{{ url('catalog-list') }}">Scherf Ice cream</a></li>
                        <li><a href="{{ url('catalog-list') }}">Another category</a></li>
                        <li><a href="{{ url('catalog-list') }}">Great items name</a></li>
                    </ul>
                  </div>
                </div>
            </div> <!-- col.// -->
            <div class="col-md-3">
                <div class="card card-category">
                  <a href="#" class="img-wrap" style="background: #ddffeb">
                      <img src="{{ asset('frontend/images/items/2.jpg') }}">
                  </a>
                  <div class="card-body">
                    <h4 class="card-title"><a href="{{ url('catalog-list') }}">Great items</a></h4>
                    <ul class="list-menu">
                        <li><a href="{{ url('catalog-list') }}">Combi steamers</a></li>
                        <li><a href="{{ url('catalog-list') }}">Cook & Hold ovens</a></li>
                        <li><a href="{{ url('catalog-list') }}">Scherf Ice cream</a></li>
                        <li><a href="{{ url('catalog-list') }}">Another category</a></li>
                        <li><a href="{{ url('catalog-list') }}">Great items name</a></li>
                    </ul>
                  </div>
                </div>
            </div> <!-- col.// -->
            <div class="col-md-3">
                <div class="card card-category">
                  <a href="#" class="img-wrap" style="background: #dee4ff">
                      <img src="{{ asset('frontend/images/items/1.jpg') }}">
                  </a>
                  <div class="card-body">
                    <h4 class="card-title"><a href="{{ url('catalog-list') }}">Other clothes</a></h4>
                    <ul class="list-menu">
                        <li><a href="{{ url('catalog-list') }}">Jeans shorts</a></li>
                        <li><a href="{{ url('catalog-list') }}">Cook & Hold ovens</a></li>
                        <li><a href="{{ url('catalog-list') }}">Scherf Ice cream</a></li>
                        <li><a href="{{ url('catalog-list') }}">Another category</a></li>
                        <li><a href="{{ url('catalog-list') }}">Great items name</a></li>
                    </ul>
                  </div>
                </div>
            </div> <!-- col.// -->
        </nav> <!-- row.// -->
    
    
    </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    
@endsection

@section('subscribe')
    @include('partials.frontend._subscribe')
@endsection