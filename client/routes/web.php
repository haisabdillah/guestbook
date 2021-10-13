<?php

use Illuminate\Support\Facades\Route;
use \Protobuf\Guestbook\GuestBookServiceClient;
use \Protobuf\Guestbook\PBEmpty;

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
    return view('guest-book');
});

Route::get('testgrpc', function(){
    $client = new GuestBookServiceClient('localhost:50051', [
        'credentials' => \Grpc\ChannelCredentials::createInsecure(),
    ]);
    list($error, $data) = $client->List(new PBEmpty())->wait();
    return $data;
});

