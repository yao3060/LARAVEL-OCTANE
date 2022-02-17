<?php

namespace App\Http\Controllers\Api;

class AuthController {

    public function login()
    {
        return response()->json([
            'code' => 'jwt',
            'message' => 'JWT',
            'app_version' =>  \Illuminate\Foundation\Application::VERSION,
            'data' => [
                'token' => '123'
            ]
        ]);
    }
}
