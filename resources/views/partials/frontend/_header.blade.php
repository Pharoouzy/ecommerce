<header class="section-header">
    <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-4">
                    <a href="{{ url('/') }}" class="brand-wrap">
                         <img class="logo" src="{{ asset('storage/'.config('settings.site_logo')) }}">
{{--                        <h3>E-Commerce</h3>--}}
                    </a> <!-- brand-wrap.// -->
                </div>
                <div class="col-lg-7 col-sm-12">
                    <form action="#" class="search">
                        <div class="input-group w-100">
                            <select class="custom-select border-right" name="category_name">
                                    <option value="">All type</option><option value="codex">Special</option>
                                    <option value="comments">Only best</option>
                                    <option value="content">Latest</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Search">

                            <div class="input-group-append">
                              <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i> Search
                              </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="widgets-wrap float-md-right">
                        <div class="widget-header  mr-3">
                            <a href="{{ url('cart') }}" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
                            <span class="badge badge-pill badge-danger notify">2</span>
                        </div>
                        <div class="widget-header icontext">
                            @if (Route::has('login'))
                                @auth
                                <a href="{{ url('dashboard') }}" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                                <div class="text">
                                    <span class="text-muted">Welcome {{ auth()->user()->first_name }}!</span>
                                    <div>
                                        <a href="{{ url('dashboard') }}">Dashboard</a>
                                    </div>
                                </div>
                                @else
                                <a href="{{ url('login') }}" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                                <div class="text">
                                    <span class="text-muted">Welcome {{ __('Guest') }}!</span>
                                    <div>
                                        <a href="{{ route('login') }}">Sign in</a>
                                        @if (Route::has('register')) |
                                        <a href="{{ route('register') }}"> Register</a>
                                        @endif
                                    </div>
                                </div>
                                @endauth
                            @endif
                        </div>
                    </div> <!-- widgets-wrap.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->
</header> <!-- section-header.// -->
