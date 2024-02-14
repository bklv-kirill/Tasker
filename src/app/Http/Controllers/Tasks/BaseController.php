<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;

use App\Services\Tasks\{IndexService, StoreService};

class BaseController extends Controller
{
    public $indexService;
    public $storeService;

    public function __construct(IndexService $indexService, StoreService $storeService)
    {
        $this->indexService = $indexService;
        $this->storeService = $storeService;
    }
}