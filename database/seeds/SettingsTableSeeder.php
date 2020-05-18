<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder {

    /**
     * @var array
     */
    protected $settings = [
        [
            'key'   =>  'site_name',
            'value' =>  'E-Commerce Application',
        ],
        [
            'key'   =>  'site_title',
            'value' =>  'E-Commerce',
        ],
        [
            'key'   =>  'default_email_address',
            'value' =>  'admin@ecommerce.dev',
        ],
        [
            'key'   =>  'currency_code',
            'value' =>  'NGN',
        ],
        [
            'key' =>  'currency_symbol',
            'value' =>  '#',
        ],
        [
            'key' =>  'site_logo',
            'value' =>  '',
        ],
        [
            'key' =>  'site_favicon',
            'value' =>  '',
        ],
        [
            'key' =>  'footer_copyright_text',
            'value' =>  '',
        ],
        [
            'key' =>  'seo_meta_title',
            'value' =>  '',
        ],
        [
            'key' =>  'seo_meta_description',
            'value' =>  '',
        ],
        [
            'key' =>  'social_facebook',
            'value' =>  '',
        ],
        [
            'key' =>  'social_twitter',
            'value' =>  '',
        ],
        [
            'key' =>  'social_instagram',
            'value' =>  '',
        ],
        [
            'key' =>  'social_linkedin',
            'value' =>  '',
        ],
        [
            'key' =>  'google_analytics',
            'value' =>  '',
        ],
        [
            'key' =>  'facebook_pixels',
            'value' =>  '',
        ],
        [
            'key' =>  'stripe_payment_method',
            'value' =>  '0',
        ],
        [
            'key' =>  'stripe_key',
            'value' =>  '45cc8974bc249bba332fsaeo2r41a722193s63e8',
        ],
        [
            'key' =>  'stripe_secret_key',
            'value' =>  '67cc8974bc249bba332fsaeo2r41l722193s63e5',
        ],
        [
            'key' =>  'paystack_payment_method',
            'value' =>  '1',
        ],
        [
            'key' =>  'paystack_public_key',
            'value' =>  'pk_test_67cc8974bc249bba332fsaeo2r41l722193s63e5',
        ],
        [
            'key' =>  'paystack_secret_key',
            'value' =>  'sk_test_67cc8974bc249bba332fsaeo2r41l722193s63e5',
        ],
        [
            'key' =>  'paystack_redirect_url',
            'value' =>  'http://ecommerce.io/paystack-redirect',
        ],
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        foreach ($this->settings as $index => $setting) {
            $result = Setting::create($setting);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted '.count($this->settings). ' records');
    }
}
