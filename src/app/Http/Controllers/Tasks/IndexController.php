<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Requests\Tasks\IndexRequest;

use Illuminate\View\View;

class IndexController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(IndexRequest $indexRequest): View
    {
        $filters = $indexRequest->validated();
        if (!isset($filters["date"])) $filters["date"] = "new";

        $tasks = $this->indexService->index($filters)->paginate(5);

        return view("tasks.index", compact(["tasks", "filters"]));
    }
}
