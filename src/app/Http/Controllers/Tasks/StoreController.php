<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Requests\Tasks\StoreRequest;

use Illuminate\Http\RedirectResponse;

class StoreController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $storeRequest): RedirectResponse
    {
        $validated = $storeRequest->validated();

        $redirect = $this->storeService->store($validated);

        return $redirect;
    }
}
