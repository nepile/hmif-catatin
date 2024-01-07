<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    /**
     * Show login view
     * 
     * @return View
     */
    public function showLogin(): View
    {
        $data = [
            'title'     => 'Silakan login untuk mendapatkan aksesbilitas!',
            'id_page'   => 'auth-login'
        ];

        return view('auth.login', $data);
    }

    /**
     * Handle login request 
     * 
     * @param Request
     * @return RedirectResponse
     */
    public function handleLogin(Request $request): RedirectResponse
    {
        $credentials = $this->validate($request, [
            'nim'       => 'required',
            'password'  => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('overview')->with('success', 'Berhasil masuk!');
        }

        return back()->with('failure', 'Maaf, nim atau password invalid')->withInput();
    }

    /**
     * Handle logout requetst
     * 
     * @return RedirectResponse
     */
    public function handleLogout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login')->with('info', 'Anda telah keluar dari sesi!');
    }
}
