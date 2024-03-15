<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Laravel\Pulse\Facades\Pulse;

Route::get('/', function () {
    $user = \App\Models\User::all();
    $cache = \Illuminate\Support\Facades\Cache::set('test','111111111111111');
    Pulse::handleExceptionsUsing(function ($e) {
        Log::debug('An exception happened in Pulse', [
            'message' => $e->getMessage(),
            'stack' => $e->getTraceAsString(),
        ]);
    });
    return view('welcome');
});
Route::get('/ss',function (){
    $mess = request('mess');
    event(new App\Events\RealTimeMessage($mess));

});
