<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedirectAuthenticatedUsersController extends Controller
{
    public function home()
    {
        if (auth()->user()->role == 'admin') {
            return redirect('/');
        } elseif (auth()->user()->role == 'user') {
            if (auth()->user()->status == 0) {
                return redirect('/pelanggan/create');
            }
            return redirect('/');
        } else {
            return auth()->logout();
        }
    }
}
