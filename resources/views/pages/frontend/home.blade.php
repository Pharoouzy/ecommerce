@extends('layouts.app')

@section('title') Welcome to {{config('app.name')}} @endsection

@section('content')
<div class="container">
    <section class="section-main padding-y">
        <main>
            <div>
                <div class="row">
                    <aside class="col-lg col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <nav class="nav-home-aside">
                                    <ul class="menu-category">
                                        <li><a href="#">Fashion and clothes</a></li>
                                        <li><a href="#">Automobile and motors</a></li>
                                        <li><a href="#">Gardening and agriculture</a></li>
                                        <li><a href="#">Electronics and tech</a></li>
                                        <li><a href="#">Packaginf and printing</a></li>
                                        <li><a href="#">Home and kitchen</a></li>
                                        <li><a href="#">Digital goods</a></li>
                                        <li class="has-submenu"><a href="#">More items</a>
                                            <ul class="submenu">
                                                <li><a href="#">Submenu name</a></li>
                                                <li><a href="#">Great submenu</a></li>
                                                <li><a href="#">Another menu</a></li>
                                                <li><a href="#">Some others</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </aside> <!-- col.// -->
                    <div class="col-md-9 col-xl-9 col-lg-9">
                        <!-- ================== COMPONENT SLIDER  BOOTSTRAP  ==================  -->
                        <div id="carousel1_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel1_indicator" data-slide-to="1"></li>
                                <li data-target="#carousel1_indicator" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('frontend/images/banners/slide1.jpg') }}" alt="First slide"> 
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('frontend/images/banners/slide2.jpg') }}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('frontend/images/banners/slide3.jpg') }}" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div> 
                        <!-- ==================  COMPONENT SLIDER BOOTSTRAP end.// ==================  .// -->	
                    </div> <!-- col.// -->
                    {{-- <div class="col-md d-none d-lg-block flex-grow-1">
                        <aside class="special-home-right">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="bg-blue text-center text-white mb-0 p-2">Popular category</h6>
                            
                                    <div class="card-banner border-bottom">
                                        <div class="py-3" style="width:80%">
                                            <h6 class="card-title">Men clothing</h6>
                                            <a href="#" class="btn btn-secondary btn-sm"> Source now </a>
                                        </div> 
                                        <img src="{{ asset('frontend/images/items/1.jpg') }}" height="80" class="img-bg">
                                    </div>
                
                                    <div class="card-banner border-bottom">
                                        <div class="py-3" style="width:80%">
                                            <h6 class="card-title">Winter clothing </h6>
                                            <a href="#" class="btn btn-secondary btn-sm"> Source now </a>
                                        </div> 
                                        <img src="{{ asset('frontend/images/items/2.jpg') }}" height="80" class="img-bg">
                                    </div>
                
                                    <div class="card-banner border-bottom">
                                        <div class="py-3" style="width:80%">
                                            <h6 class="card-title">Home inventory</h6>
                                            <a href="#" class="btn btn-secondary btn-sm"> Source now </a>
                                        </div> 
                                        <img src="{{ asset('frontend/images/items/6.jpg') }}" height="80" class="img-bg">
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div> <!-- col.// --> --}}
                </div> <!-- row.// -->
            </div> <!-- container //  -->
        </main>
    </section>
    <!-- ========================= SECTION MAIN END// ========================= -->
    

    <section class="section-name padding-y-sm">
        <div class="container">
          
            <header class="section-heading">
                <a href="#" class="btn btn-outline-primary float-right">See all</a>
                <h3 class="section-title">Featured products</h3>
            </header><!-- sect-heading -->
                
                    
            <div class="row">
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/1.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Just another product name</a>
                            <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/2.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Some item name here</a>
                            <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/3.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Great product name here</a>
                            <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/4.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Just another product name</a>
                            <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/7.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Just another product name</a>
                            <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/6.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Some item name here</a>
                            <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/7.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Great product name here</a>
                            <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/9.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Just another product name</a>
                            <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
            </div> <!-- row.// -->
                
        </div><!-- container // -->
    </section>

    <!-- ========================= SECTION  ========================= -->
    <section class="section-name padding-y-sm">
        <div class="container">
          
            <header class="section-heading">
                <a href="#" class="btn btn-outline-primary float-right">See all</a>
                <h3 class="section-title">Popular products</h3>
            </header><!-- sect-heading -->
                
                    
            <div class="row">
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/1.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Just another product name</a>
                            <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/2.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Some item name here</a>
                            <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/3.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Great product name here</a>
                            <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/4.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Just another product name</a>
                            <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/7.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Just another product name</a>
                            <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/6.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Some item name here</a>
                            <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/7.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Great product name here</a>
                            <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/9.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Just another product name</a>
                            <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
            </div> <!-- row.// -->
                
        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->       
    <section class="section-name padding-y-sm">
        <div class="container">
          
            <header class="section-heading">
                <a href="#" class="btn btn-outline-primary float-right">See all</a>
                <h3 class="section-title">Recently Added</h3>
            </header><!-- sect-heading -->
                
                    
            <div class="row">
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/1.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Just another product name</a>
                            <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/2.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Some item name here</a>
                            <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/3.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Great product name here</a>
                            <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/4.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Just another product name</a>
                            <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/7.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Just another product name</a>
                            <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/6.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Some item name here</a>
                            <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/7.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Great product name here</a>
                            <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="{{ asset('frontend/images/products/9.jpg') }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Just another product name</a>
                            <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
            </div> <!-- row.// -->
                
        </div><!-- container // -->
    </section>

</div>               
<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y bg">
    <div class="container">
            
        <div class="row">
            <div class="col-md-6">
                <h3>Download app demo text</h3>
                <p>Get an amazing app  to make Your life easy</p>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="#"><img src="frontend/images/gplay.svg" height="40"></a>
                <a href="#"><img src="frontend/images/appstore.png" height="40"></a>
            </div>
        </div> <!-- row.// -->
    </div>
</section>
@endsection
@section('subscribe')
    @include('partials.frontend._subscribe')
@endsection