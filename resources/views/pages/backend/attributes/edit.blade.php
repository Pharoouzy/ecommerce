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
                <li class="breadcrumb-item"><a href="{{ route('admin.attributes.index') }}">Attributes</a></li>
                <li class="breadcrumb-item active"><a href="#">Edit Attribute</a></li>
            </ul>
        </div>
        @include('partials.backend._flash')
        <div class="row user">
            <div class="col-md-3">
                <div class="tile p-0">
                    <ul class="nav flex-column nav-tabs user-tabs">
                        <li class="nav-item"><a class="nav-link active" href="#general" data-toggle="tab">General</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="general">
                        <div class="tile">
                            <form action="{{ route('admin.attributes.update') }}" method="POST" role="form">
                                @csrf
                                <h3 class="tile-title">Attribute Information</h3>
                                <hr>
                                <div class="tile-body">
                                    <div class="form-group">
                                        <label class="control-label" for="code">Code</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            placeholder="Enter attribute code"
                                            id="code"
                                            name="code"
                                            value="{{ old('code', $attribute->code) }}"
                                        >
                                    </div>
                                    <input type="hidden" name="id" value="{{ $attribute->id }}">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name</label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            placeholder="Enter attribute name"
                                            id="name"
                                            name="name"
                                            value="{{ old('name', $attribute->name) }}"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="frontend_type">Frontend Type</label>
                                        @php $types = ['select' => 'Select Box', 'radio' => 'Radio Button', 'text' => 'Text Field', 'text_area' => 'Text Area']; @endphp
                                        <select name="frontend_type" id="frontend_type" class="form-control">
                                            @foreach($types as $key => $label)
                                                <option value="{{ $key }}" {{ $attribute->frontend_type == $key ? 'selected' : '' }}>{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input"
                                                       type="checkbox"
                                                       id="is_filterable"
                                                       name="is_filterable"
                                                    {{ $attribute->is_filterable == 1 ? 'checked' : '' }}>Filterable
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input"
                                                       type="checkbox"
                                                       id="is_required"
                                                       name="is_required"
                                                    {{ $attribute->is_required == 1 ? 'checked' : '' }}>Required
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="tile-footer">
                                    <div class="row d-print-none mt-2">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Attribute</button>
                                            <a class="btn btn-danger" href="{{ route('admin.attributes.index') }}"><i class="fa fa-fw fa-lg fa-arrow-left"></i>Go Back</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('javascript')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dropzone.js') }}"></script>
@endsection
