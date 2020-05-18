<div class="tile">
    <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">Payment Settings</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="stripe_payment_method">Stripe Payment Method</label>
                <select name="stripe_payment_method" id="stripe_payment_method" class="form-control">
                    <option value="1" {{ (config('settings.stripe_payment_method')) == 1 ? 'selected' : '' }}>Enabled</option>
                    <option value="0" {{ (config('settings.stripe_payment_method')) == 0 ? 'selected' : '' }}>Disabled</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label" for="stripe_key">Stripe Key</label>
                <input
                    class="form-control @error('stripe_key') is-invalid @enderror"
                    type="text"
                    placeholder="Enter Stripe Key"
                    id="stripe_key"
                    name="stripe_key"
                    value="{{ config('settings.stripe_key') }}"
                >
                @error('stripe_key')
                <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group pb-2">
                <label class="control-label" for="stripe_secret_key">Secret Key</label>
                <input
                    class="form-control @error('stripe_secret_key') is-invalid @enderror"
                    type="text"
                    placeholder="Enter Stripe Secret Key"
                    id="stripe_secret_key"
                    name="stripe_secret_key"
                    value="{{ config('settings.stripe_secret_key') }}"
                >
                @error('stripe_secret_key')
                <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <hr>
            <div class="form-group pt-2">
                <label class="control-label" for="paystack_payment_method">PayStack Payment Method</label>
                <select name="paystack_payment_method" id="paystack_payment_method" class="form-control">
                    <option value="1" {{ (config('settings.paystack_payment_method')) == 1 ? 'selected' : '' }}>Enabled</option>
                    <option value="0" {{ (config('settings.paystack_payment_method')) == 0 ? 'selected' : '' }}>Disabled</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label" for="paystack_public_key">Public Key</label>
                <input
                    class="form-control @error('paystack_public_key') is-invalid @enderror"
                    type="text"
                    placeholder="Enter PayStack Public Key"
                    id="paystack_public_key"
                    name="paystack_public_key"
                    value="{{ config('settings.paystack_public_key') }}"
                >
                @error('paystack_public_key')
                <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group">
                <label class="control-label" for="paystack_secret_key">Secret Key</label>
                <input
                    class="form-control @error('paystack_secret_key') is-invalid @enderror"
                    type="text"
                    placeholder="Enter PayStack Secret Key"
                    id="paystack_secret_key"
                    name="paystack_secret_key"
                    value="{{ config('settings.paystack_secret_key') }}"
                >
                @error('paystack_secret_key')
                <small class="form-text text-danger"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group">
                <label class="control-label" for="paystack_redirect_url">Redirect URL</label>
                <input
                    class="form-control @error('paystack_redirect_url') is-invalid @enderror"
                    type="text"
                    placeholder="Enter PayStack Redirect URL"
                    id="paystack_redirect_url"
                    name="paystack_redirect_url"
                    value="{{ config('settings.paystack_redirect_url') }}"
                >
                @error('paystack_redirect_url')
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
