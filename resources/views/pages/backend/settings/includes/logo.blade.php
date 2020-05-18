<div class="tile">
    <h3 class="tile-title">Site Logo Settings</h3>
    <hr>
    <form method="POST" action="{{ route('admin.settings.update') }}" role="form" enctype="multipart/form-data">
        @csrf
        <div class="tile-body">
            <div class="row">
                <div class="col-3">
                    @if (config('settings.site_logo') != null)
                        <img src="{{ asset('storage/'.config('settings.site_logo')) }}" id="logoImg" style="width: 100px; height: auto;">
                    @else
                        <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="logoImg" style="width: 100px; height: auto;">
                    @endif
                </div>
                <div class="col-9">
                    <div class="form-group">
                        <label class="control-label">Site Logo</label>
                        <input
                            class="form-control @error('site_logo') is-invalid @enderror"
                            type="file"
                            name="site_logo"
                            onchange="loadFile(event,'logoImg')"
                        >
                        @error('site_logo')
                        <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-3">
                    @if (config('settings.site_favicon') != null)
                        <img src="{{ asset('storage/'.config('settings.site_favicon')) }}" id="faviconImg" style="width: 80px; height: auto;">
                    @else
                        <img src="https://via.placeholder.com/80x80?text=Placeholder+Image" id="faviconImg" style="width: 80px; height: auto;">
                    @endif
                </div>
                <div class="col-9">
                    <div class="form-group">
                        <label class="control-label">Site Favicon</label>
                        <input
                            class="form-control @error('site_favicon') is-invalid @enderror"
                            type="file"
                            name="site_favicon"
                            onchange="loadFile(event,'faviconImg')"
                        >
                        @error('site_favicon')
                        <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="tile-footer">
            <div class="row d-print-none mt-2">
                <div class="col-12 text-right">
                    <button class="btn btn-success" type="submit">
                        <i class="fa fa-fw fa-lg fa-check-circle"></i>
                        Update Settings
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@section('javascript')
    <script>
        loadFile = function(event, id) {
            var output = document.getElementById(id);
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endsection
