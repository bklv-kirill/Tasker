<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;

use App\Http\Requests\Tasks\UpdateRequest;

use App\Models\Task;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Task $task, UpdateRequest $updateRequest)
    {
        $validated = $updateRequest->validated();

        $task->update($validated);

        return redirect()->route("tasks.index");
    }
}
