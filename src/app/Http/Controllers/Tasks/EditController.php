<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;

use App\Models\Task;

use Illuminate\View\View;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Task $task): View
    {
        return view("tasks.edit", compact("task"));
    }
}
