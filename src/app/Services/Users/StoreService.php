<?php

namespace App\Services\Users;

use App\Models\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class StoreService 
{
    public function store(array $validated): RedirectResponse
    {
        $redirect = redirect()->route("users.register")->withInput([
            "login" => $validated["login"],
            "email" => $validated["email"],
        ]);

        if (User::query()->where("login", $validated["login"])->exists()) return $redirect->withErrors(["login" => "Login is occupated"]);
        else if (User::query()->where("email", $validated["email"])->exists()) return $redirect->withErrors(["email" => "Email is occupated"]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect()->route("tasks.index");
    }
}