<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Setting;
use App\Traits\UploadAble;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\BaseController;

class SettingController extends BaseController {

    use UploadAble;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $this->setPageTitle('Settings', 'Manage Settings');
        return view('pages.backend.settings.index');
    }

    /**
     * @param Request $request
     * @return  \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request) {

        // validate data
        $this->validate($request, [
            'site_name' => 'sometimes|string',
            'site_title' => 'sometimes|string',
            'default_email_address' => 'sometimes|string|email',
            'currency_code' => 'sometimes|string|max:3|min:3',
            'currency_symbol' => 'sometimes|string|max:1|min:1',
            'site_logo' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'site_favicon' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg,ico|max:5048',
            'footer_copyright_text' => 'sometimes|string',
            'seo_meta_title' => 'sometimes|string',
            'seo_meta_description' => 'sometimes|string',
            'social_facebook' => 'sometimes|url',
            'social_twitter' => 'sometimes|url',
            'social_instagram' => 'sometimes|url',
            'social_linkedin' => 'sometimes|url',
            'google_analytics' => 'sometimes|string',
            'facebook_pixels' => 'sometimes|string',
            'stripe_payment_method' => 'sometimes|integer',
            'stripe_key' => 'sometimes|string',
            'stripe_secret_key' => 'sometimes|string',
            'paystack_payment_method' => 'sometimes|integer',
            'paystack_public_key' => 'sometimes|string',
            'paystack_secret_key' => 'sometimes|string',
            'paystack_redirect_url' => 'sometimes|url',
        ]);

        if ($request->has('site_logo') && ($request->file('site_logo') instanceof UploadedFile)) {

            if (config('settings.site_logo') != null) {
                $this->deleteOne(config('settings.site_logo'));
            }
            $logo = $this->uploadOne($request->file('site_logo'), 'images');
            Setting::set('site_logo', $logo);

        } elseif ($request->has('site_favicon') && ($request->file('site_favicon') instanceof UploadedFile)) {

            if (config('settings.site_favicon') != null) {
                $this->deleteOne(config('settings.site_favicon'));
            }
            $favicon = $this->uploadOne($request->file('site_favicon'), 'images/favicon');
            Setting::set('site_favicon', $favicon);

        } else {

            $keys = $request->except('_token');

            foreach ($keys as $key => $value) {
                Setting::set($key, $value);
            }
        }
        return $this->responseRedirectBack('Settings updated successfully.', 'success');

    }


}
