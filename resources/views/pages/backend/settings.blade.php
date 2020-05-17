@extends('layouts.backend')

@section('title') Dashboard @endsection

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
        <div class="row">
            <div class="col-md-3">
                <div class="tile">
                    <div class="tile-body">
                        <ul>
                            <li>Settings</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tile">
                    <h3 class="tile-title">General Setting</h3>
                    <div class="tile-body">
                        <div>
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Site Name</label>
                                <input class="form-control @error('site_name') is-invalid @enderror" type="text" placeholder="Enter site name" name="site_name" required autofocus>
                                @error('site_name')
                                <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Site Title</label>
                                <input class="form-control @error('site_title') is-invalid @enderror" name="site_title" type="text" placeholder="Enter site title">
                                @error('site_title')
                                <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Default Email Address</label>
                                <input class="form-control @error('default_email_address') is-invalid @enderror" type="email" name="default_email_address" placeholder="Enter default email address">
                                @error('default_email_address')
                                <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                                @enderror
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label class="control-label">Currency Code</label>
                                    <input class="form-control @error('currency_code') is-invalid @enderror" type="text" name="currency_code" max="3" min="3" placeholder="Enter Currency">
                                    @error('currency_code')
                                    <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                                    @enderror
                                </div>
                                <div class="col form-group">
                                    <label class="control-label">Currency Symbol</label>
                                    <input class="form-control @error('currency_symbol') is-invalid @enderror" name="currency_symbol" type="text" max="1"  min="1" placeholder="Enter default email address">
                                    @error('currency_symbol')
                                    <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                                    @enderror
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tile-footer text-right">
                        <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                        &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
