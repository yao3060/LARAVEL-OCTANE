<?php

namespace App\Http\Controllers\Api;

class BaseController {

    public function index()
    {
        return response()->json(range(1,100));
    }

}
