<div class="tile">
    <h3 class="tile-title">General Settings</h3>
    <hr>
    <form method="POST" action="{{ route('admin.settings.update') }}" role="form">
        @csrf
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="site_name">Site Name</label>
                <input
                    class="form-control @error('site_name') is-invalid @enderror"
                    type="text"
                    placeholder="Enter site name"
                    name="site_name"
                    id="site_name"
                    required autofocus
                    value="{{ config('settings.site_name') }}">
                @error('site_name')
                <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group">
                <label class="control-label" for="site_title">Site Title</label>
                <input
                    class="form-control @error('site_title') is-invalid @enderror"
                    name="site_title"
                    id="site_title"
                    type="text"
                    required
                    placeholder="Enter site title"
                    value="{{ config('settings.site_title') }}"
                >
                @error('site_title')
                <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group">
                <label class="control-label" for="default_email_address">Default Email Address</label>
                <input
                    class="form-control @error('default_email_address') is-invalid @enderror"
                    type="email"
                    name="default_email_address"
                    id="default_email_address"
                    placeholder="Enter default email address"
                    required
                    value="{{ config('settings.default_email_address') }}"
                >
                @error('default_email_address')
                <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-row">
                <div class="col form-group">
                    <label class="control-label" for="currency_code">Currency Code</label>
                    <input
                        class="form-control @error('currency_code') is-invalid @enderror"
                        type="text"
                        name="currency_code"
                        id="currency_code"
                        max="3" min="3"
                        maxlength="3"
                        minlength="3"
                        required
                        placeholder="Enter Currency Code"
                        value="{{ config('settings.currency_code') }}"
                    >
                    @error('currency_code')
                    <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                    @enderror
                </div>
                <div class="col form-group">
                    <label class="control-label" for="currency_symbol">Currency Symbol</label>
                    <input
                        class="form-control @error('currency_symbol') is-invalid @enderror"
                        name="currency_symbol"
                        id="currency_symbol"
                        type="text"
                        max="1" min="1"
                        maxlength="1"
                        minlength="1"
                        required
                        placeholder="Enter default email address"
                        value="{{ config('settings.currency_symbol') }}"
                    >
                    @error('currency_symbol')
                    <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="tile-footer text-right">
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
