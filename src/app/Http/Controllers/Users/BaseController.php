<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;

use App\Services\Users\StoreService;

class BaseController extends Controller
{
    public $storeService;

    public function __construct(StoreService $storeService)
    {
        $this->storeService = $storeService;
    }
}