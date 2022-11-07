<?php

use App\Http\Procedures\TennisProcedure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/json', function () {
    return range(1, 100);
});

Route::get('/', function () {
    return $_SERVER;
});

//curl 'http://127.0.0.1:8001/api/v1/endpoint' --data-binary '{"jsonrpc":"2.0","method":"tennis@ping","id":1}'
Route::rpc('/v1/endpoint', [TennisProcedure::class])->name('rpc.endpoint');

