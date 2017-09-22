<?php

namespace App\Http\Controllers;
use App\User as user;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate()
    {
        if (Auth::attempt(['email' => 'admin@gmail.com', 'password' => 'admin'])) {
            // Authentication passed...
            echo "passed";
            // return redirect('/adminlogin');
        }
    }
}
