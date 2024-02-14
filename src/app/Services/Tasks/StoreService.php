<?php

namespace App\Services\Tasks;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse;

use App\Models\Task;

class StoreService
{
    public function store(array $validated): RedirectResponse
    {
        $redirect = redirect()->route("tasks.index");

        $user = Auth::user();

        if (Task::query()->where("user_id", $user->id)->where("title", $validated["title"])->exists()) return $redirect->withInput()->withErrors(["store" => "Store Error"]);

        Task::query()->create([...$validated, "user_id" => $user->id]);

        return $redirect;
    }
}