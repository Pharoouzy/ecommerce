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
                <li class="breadcrumb-item active"><a href="#">Attributes</a></li>
            </ul>
        </div>
        @include('partials.backend._flash')
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{ route('admin.attributes.create') }}" class="btn btn-primary pull-right">Add attribute</a>
                            </div>
                        </div>
                        <hr>
                        <table class="table table-hover table-bordered" id="attributesTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th class="text-center">Frontend Type</th>
                                <th class="text-center">Filterable </th>
                                <th class="text-center">Required </th>
                                <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($attributes as $serial => $attribute)
                                <tr>
                                    <td>{{ ++$serial }}</td>
                                    <td>{{ $attribute->code }}</td>
                                    <td>{{ $attribute->name }}</td>
                                    <td>{{ $attribute->frontend_type }}</td>
                                    <td class="text-center">
                                        @if ($attribute->is_filterable == 1)
                                            <span class="badge badge-success">Yes</span>
                                        @else
                                            <span class="badge badge-danger">No</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($attribute->is_required == 1)
                                            <span class="badge badge-success">Yes</span>
                                        @else
                                            <span class="badge badge-danger">No</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Second group">
                                            <a href="{{ route('admin.attributes.edit', encrypt($attribute->id)) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('admin.attributes.delete', encrypt($attribute->id)) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('javascript')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#attributesTable').DataTable();</script>
@endsection
