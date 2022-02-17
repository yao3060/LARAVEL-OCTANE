<?php

namespace App\Http\Controllers\Api;

class BaseController {

    public function index()
    {
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA',
            'country' => 'US',
        ]);
    }

}
