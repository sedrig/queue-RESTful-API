<?php

use Illuminate\Support\Facades\Route;

use function Psy\info;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    /* App\Jobs\SendMessage::withChain([
        new App\Jobs\PrepareJob('Prepare.....'),
        new App\Jobs\PublishJob('Publish!')
    ])->dispatch("Start Job")/*("TEST MESSAGE")->delay(now()->addMinutes(10));*/

    //return view('welcome');
});
