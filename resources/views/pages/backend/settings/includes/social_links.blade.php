<div class="tile">
    <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">Social Links Settings</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="social_facebook">Facebook Profile</label>
                <input
                    class="form-control @error('social_facebook') is-invalid @enderror"
                    type="text"
                    placeholder="Enter facebook profile link"
                    id="social_facebook"
                    name="social_facebook"
                    value="{{ config('settings.social_facebook') }}"
                >
                @error('social_facebook')
                <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group">
                <label class="control-label" for="social_twitter">Twitter Profile</label>
                <input
                    class="form-control @error('social_twitter') is-invalid @enderror"
                    type="text"
                    placeholder="Enter Twitter Profile Link"
                    id="social_twitter"
                    name="social_twitter"
                    value="{{ config('settings.social_twitter') }}"
                >
                @error('social_twitter')
                <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group">
                <label class="control-label" for="social_instagram">Instagram Profile</label>
                <input
                    class="form-control @error('social_instagram') is-invalid @enderror"
                    type="text"
                    placeholder="Enter Instagram Profile Link"
                    id="social_instagram"
                    name="social_instagram"
                    value="{{ config('settings.social_instagram') }}"
                >
                @error('social_instagram')
                <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group">
                <label class="control-label" for="social_linkedin">LinkedIn Profile</label>
                <input
                    class="form-control @error('social_linkedin') is-invalid @enderror"
                    type="text"
                    placeholder="Enter linkedin profile link"
                    id="social_linkedin"
                    name="social_linkedin"
                    value="{{ config('settings.social_linkedin') }}"
                >
                @error('social_linkedin')
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
