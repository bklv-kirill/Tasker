<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;

use App\Http\Requests\Users\AuthRequest;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(AuthRequest $authRequest): RedirectResponse
    {
        $validated = $authRequest->validated();

        if (!Auth::attempt($validated)) return redirect()->route("users.login")->withInput($authRequest->only("login"))->withErrors(["auth" => "Login Error"]);
        return redirect()->route("tasks.index");
    }
}
