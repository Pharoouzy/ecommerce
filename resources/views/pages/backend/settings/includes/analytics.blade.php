<div class="tile">
    <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">Analytics Settings</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="google_analytics">Google Analytics Code</label>
                <textarea
                    class="form-control @error('google_analytics') is-invalid @enderror"
                    rows="4"
                    placeholder="Enter google analytics code"
                    id="google_analytics"
                    name="google_analytics"
                >{!! Config::get('settings.google_analytics') !!}</textarea>
                @error('google_analytics')
                <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group">
                <label class="control-label" for="facebook_pixels">Facebook Pixel Code</label>
                <textarea
                    class="form-control @error('facebook_pixels') is-invalid @enderror"
                    rows="4"
                    placeholder="Enter facebook pixel code"
                    id="facebook_pixels"
                    name="facebook_pixels"
                >{{ Config::get('settings.facebook_pixels') }}</textarea>
                @error('facebook_pixels')
                <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                @enderror
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
