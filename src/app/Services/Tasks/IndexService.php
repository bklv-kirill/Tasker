<?php

namespace App\Services\Tasks;

use App\Http\Filters\Tasks\TaskFilter;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Builder;

use App\Models\Task;

class IndexService
{
    public function index(array $filters): Builder
    {
        $user = Auth::user();
        $filter = app()->make(TaskFilter::class, ["queryParams" => array_filter($filters)]);

        return $user->is_admin ? 
        Task::filter($filter) : 
        Task::filter($filter)->where("user_id", $user->id);
    }
}