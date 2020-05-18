<div class="tile">
    <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">Footer &amp; SEO Settings</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="footer_copyright_text">Footer Copyright Text</label>
                <textarea
                    class="form-control @error('footer_copyright_text') is-invalid @enderror"
                    rows="4"
                    required
                    placeholder="Enter footer copyright text"
                    id="footer_copyright_text"
                    name="footer_copyright_text"
                >{{ config('settings.footer_copyright_text') }}</textarea>
                @error('footer_copyright_text')
                <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group">
                <label class="control-label" for="seo_meta_title">SEO Meta Title</label>
                <input
                    class="form-control @error('seo_meta_title') is-invalid @enderror"
                    type="text"
                    required
                    placeholder="Enter seo meta title for store"
                    id="seo_meta_title"
                    name="seo_meta_title"
                    value="{{ config('settings.seo_meta_title') }}"
                >
                @error('seo_meta_title')
                <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group">
                <label class="control-label" for="seo_meta_description">SEO Meta Description</label>
                <textarea
                    class="form-control @error('seo_meta_description') is-invalid @enderror"
                    rows="4"
                    required
                    placeholder="Enter seo meta description for store"
                    id="seo_meta_description"
                    name="seo_meta_description"
                >{{ config('settings.seo_meta_description') }}</textarea>
                @error('seo_meta_description')
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
