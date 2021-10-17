<?php

use Illuminate\Support\Facades\Route;
use \Protobuf\Guestbook\GuestBookServiceClient;
use \Protobuf\Guestbook\GreetClient;
use \Protobuf\Greet\GreeterClient;
use \Protobuf\Greet\HelloRequest;
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
    $request = new HelloRequest();
    $request->setName('coba');
    $client = new GreeterClient("grpc.dimiegroup.com", [
        'credentials' => \Grpc\ChannelCredentials::createInsecure(),
    ]);
    list($error, $data) = $client->SayHello($request)->wait();
    return $data;
});

