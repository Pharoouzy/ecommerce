<?php

namespace App\Http\Controllers\Auth\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
    */
    protected $redirectTo = '/user';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest:admin')->except('logout');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginForm() {
        return view('auth.backend.login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request) {
        $this->validate($request, [
           'email' => 'required|email',
           'password' => 'required|min:6',
        ]);

        if(Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->get('remember'))){
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function logout(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->invalidate();

        return redirect()->route('admin.login');
    }
}
