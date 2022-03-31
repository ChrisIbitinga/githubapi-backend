<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->middleware(['ApiKey'])->group(function(){
    Route::get('/', function(){
        return response()->json([
            'status' => 'success',
            'version' => 'V 1',
            'baseUrl' => 'http://localhost:9001/api/v1'
        ], status: 200);
     });
});


