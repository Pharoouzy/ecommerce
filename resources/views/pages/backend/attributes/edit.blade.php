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
                <h1><i class="fa fa-cogs"></i> {{ $pageTitle }}</h1>
                <p>{{ $subTitle }}</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Categories</a></li>
                <li class="breadcrumb-item active"><a href="#">Edit Category</a></li>
            </ul>
        </div>
        @include('partials.backend._flash')
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="tile">
                    <div class="container">
                        <h3 class="tile-title">{{ $subTitle }}</h3>
                        <form action="{{ route('admin.categories.update') }}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="tile-body">
                                <div class="form-group">
                                    <label class="control-label" for="name">Name <span class="m-l-5 text-danger"> *</span></label>
                                    <input type="hidden" name="id" value="{{ $category->id }}">
                                    <input
                                        class="form-control @error('name') is-invalid @enderror"
                                        type="text"
                                        name="name"
                                        id="name"
                                        required
                                        value="{{ old('name', $category->name) }}"
                                    >
                                    @error('name')
                                    <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="description">Description</label>
                                    <textarea class="form-control" rows="4" name="description" id="description">{{ old('description', $category->description) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="parent">Parent Category <span class="m-l-5 text-danger"> *</span></label>
                                    <select id=parent class="form-control custom-select mt-15 @error('parent_id') is-invalid @enderror" name="parent_id" required>
                                        <option value="0">Select a parent category</option>
                                        @foreach($categories as $categoryList)
                                            <option value="{{ $category->id }}" {{ $category->parent_id == $categoryList->id ? 'selected' : '' }}>
                                                {{ $categoryList->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('parent_id') <small class="form-text text-danger"><strong>{{ $message }}</strong></small> @enderror
                                </div>
                                <div class="form-group">
                                    <div class="toggle">
                                        <label class="form-check-label">
                                            <input class="button-indecator" type="checkbox" id="featured" name="featured" {{ $category->featured == 1 ? 'checked' : '' }} value="1">
                                            <span class="button-indecator"> Featured Category</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="toggle">
                                        <label class="form-check-label">
                                            <input class="button-indecator" type="checkbox" id="menu" name="menu" {{ $category->menu ? 'checked' : '' }} value="1">
                                            <span class="button-indecator"> Show in Menu</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            @if ($category->image != null)
                                                <figure class="mt-2" style="width: 80px; height: auto;">
                                                    <img src="{{ asset('storage/'.$category->image) }}" id="categoryImage" class="img-fluid" alt="img">
                                                </figure>
                                            @endif
                                        </div>
                                        <div class="{{ $category->image != null ? 'col-md-10' : 'col-md-12' }}">
                                            <label class="control-label">Category Image</label>
                                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"/>
                                            @error('image')
                                            <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tile-footer text-right">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Category</button>
                                &nbsp;&nbsp;&nbsp;
                                <a class="btn btn-secondary" href="{{ route('admin.categories.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('javascript')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dropzone.js') }}"></script>
@endsection
