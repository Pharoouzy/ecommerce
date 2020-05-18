@extends('layouts.backend')

@section('title') {{ $pageTitle }} @endsection

@section('bars')
    @include('partials.backend._header')
    @include('partials.backend._navbar')
    @include('partials.backend._sidebar')
@endsection

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-cogs"></i> Settings</h1>
                <p>Configure App Settings.</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item active"><a href="#">Settings</a></li>
            </ul>
        </div>
        @include('partials.backend._flash')
        <div class="row">
            <div class="col-md-3">
                <div class="tile p-0">
                    <ul class="nav flex-column nav-tabs user-tabs">
                        <li class="nav-item"><a class="nav-link active" href="#general" data-toggle="tab">General</a></li>
                        <li class="nav-item"><a class="nav-link" href="#site-logo" data-toggle="tab">Site Logo</a></li>
                        <li class="nav-item"><a class="nav-link" href="#footer-seo" data-toggle="tab">Footer &amp; SEO</a></li>
                        <li class="nav-item"><a class="nav-link" href="#social-links" data-toggle="tab">Social Links</a></li>
                        <li class="nav-item"><a class="nav-link" href="#analytics" data-toggle="tab">Analytics</a></li>
                        <li class="nav-item"><a class="nav-link" href="#payments" data-toggle="tab">Payments</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="general">
                        @include('pages.backend.settings.includes.general')
                    </div>
                    <div class="tab-pane fade" id="site-logo">
                        @include('pages.backend.settings.includes.logo')
                    </div>
                    <div class="tab-pane fade" id="footer-seo">
                        @include('pages.backend.settings.includes.footer_seo')
                    </div>
                    <div class="tab-pane fade" id="social-links">
                        @include('pages.backend.settings.includes.social_links')
                    </div>
                    <div class="tab-pane fade" id="analytics">
                        @include('pages.backend.settings.includes.analytics')
                    </div>
                    <div class="tab-pane fade" id="payments">
                        @include('pages.backend.settings.includes.payments')
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
