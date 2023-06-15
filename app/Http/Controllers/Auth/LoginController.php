<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function redirectTo()
    {
        if (Auth::user()->role == 'admin') {
            $this->redirectTo = route('biodata.index');
            return $this->redirectTo;
        } elseif (Auth::user()->role == 'bidan') {
            $this->redirectTo = route('biodata.index');
            return $this->redirectTo;
        } elseif (Auth::user()->role == 'pegawai') {
            $this->redirectTo = route('biodata.index');
            return $this->redirectTo;
        } else {
            $this->redirectTo = route('biodata.index');
            return $this->redirectTo();
        }
    }

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
