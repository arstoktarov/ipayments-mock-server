<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Cookie;

class AuthController extends Controller
{
    public function setToken()
    {
        return response([], 200)
            ->withCookie(
                Cookie::create('FSTicket', Hash::make('FSTicket'))
            )
            ->withCookie(
                Cookie::create('KTJTicket', Hash::make('KTJTicket'))
            );
    }

    /**
     * @throws ValidationException
     */
    public function getToken(Request $request)
    {
        return response()->json(Hash::make('token'));
    }
}
