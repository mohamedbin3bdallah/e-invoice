<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AccessController;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
		
		$this->access_tokens($request);
		
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
	
	/**
     * Create access tokens and save them to session.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     */
    public function access_tokens(LoginRequest $request)
    {
        $access = new AccessController();
		$access_token = $access->create_access_token();
		if($access_token)
		{
			session(['access_token' => $access_token]);
			
			$invoice_sdk_token = $access->create_invoice_sdk_token($request, $access_token);
			if(isset($invoice_sdk_token['data'][0])) session(['invoice_sdk_token' => $invoice_sdk_token['data'][0]]);
			else session(['invoice_sdk_token' => '']);
		}
		else
		{
			session(['access_token' => '']);
			session(['invoice_sdk_token' => '']);
		}
		
		//session(['logout_time' => strtotime(date('d-m-Y H:0:0', strtotime(date('d-m-Y H:0:0')) + 3600).PHP_EOL).PHP_EOL]);
		session(['logout_time' => strtotime(date('d-m-Y H:i:s', strtotime(date('d-m-Y H:i:s')) + 3600).PHP_EOL).PHP_EOL]);
    }
}
