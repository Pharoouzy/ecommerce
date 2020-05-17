<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Traits\UploadAble;
use App\Http\Controllers\BaseController;

class SettingController extends BaseController {

    use UploadAble;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $this->setPageTitle('Settings', 'Manage Settings');
        return view('pages.backend.settings');
    }

    /**
     * @param Request $request
     */
    public function update(Request $request) {

    }


}
