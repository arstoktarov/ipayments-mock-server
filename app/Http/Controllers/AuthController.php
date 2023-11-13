<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
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
    public function getToken(Request $request): JsonResponse
    {
        return response()->json(Hash::make('token'));
    }

    public function closeWorkSession(Request $request): string
    {
        return "";
    }

    public function openWorkSession(Request $request): string
    {
        return "";
    }
}
