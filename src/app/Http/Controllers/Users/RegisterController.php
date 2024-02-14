<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;

use Illuminate\View\View;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        return view("users.register");
    }
}
