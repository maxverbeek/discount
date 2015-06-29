<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\GoogleClient;
use Input;
use Auth;
use Session;
use URL;

class AuthController extends Controller
{
    public function __construct(\Google_Client $client)
    {
        $this->google = new GoogleClient($client);
    }

    public function getGoogleLogin()
    {
        if (! Input::has('code'))
        {
            Session::set('previous-location', URL::previous());

            return redirect($this->google->getLoginUrl());
        }

        $code = Input::get('code');

        $redirect = redirect(Session::get('previous-location'));

        if ($this->google->checkCode($code))
        {
            $user = $this->google->getUser();

            Auth::login($user);
        }

        else
        {
            $redirect->with('message', 'Failed to log you in.');
        }

        return $redirect;
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
