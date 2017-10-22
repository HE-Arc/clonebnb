<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;

class UsersLogoutController extends Controller
{

	protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function logout()
    {
        $this->auth->logout();
        flashy()->success('Merci de votre site');
        return redirect()->route('root_path');
    }
}
