<?php

use App\Models\Team;
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

Route::get('teams', function () {
   return Team::all(['name', 'SA', 'short', 'meet_abbr', 'address', 'webpage', 'contact_name', 'contact_email'])->toArray(); //TODO teams api
});
