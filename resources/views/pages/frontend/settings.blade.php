@extends('layouts.app')

@section('title') My Orders @endsection

@section('navbar')
    @include('partials.frontend._navbar')
@endsection

@section('content')
<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">My Settings</h2>
    </div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
    
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
    <div class="container">
    
        <div class="row">
            @include('partials.frontend._sidebar')
            <main class="col-md-9">
        
                <h2 class="text-center">No items found</h2>
        
            </main> <!-- col.// -->
        </div>
    
    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
@endsection

@section('subscribe')
    @include('partials.frontend._subscribe')
@endsection