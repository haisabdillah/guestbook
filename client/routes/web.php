<?php

use Illuminate\Support\Facades\Route;
use \Protobuf\Guestbook\GuestBookServiceClient;
use \Protobuf\Guestbook\GreetClient;
use \Protobuf\Greet\GreeterClient;
use \Protobuf\Greet\HelloRequest;
use \Protobuf\Guestbook\PBEmpty;
use \Protobuf\Guestbook\GuestBook;

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

Route::get('grpcdimie', function(){
    $request = new HelloRequest();
    $request->setName('coba');
    $client = new GreeterClient("grpc.dimiegroup.com", [
        'credentials' => \Grpc\ChannelCredentials::createInsecure(),
    ]); 
    list($response,$status) = $client->SayHello($request)->wait();
    if ($status->code !== \Grpc\STATUS_OK) {
        echo "ERROR: " . $status->code . ", " . $status->details;
        exit(1);
    }
    return response()->json($response->getMessage(), 200);

});

Route::get('grpcjs', function(){
    $client = new GuestBookServiceClient("127.0.0.1:50051", [
        'credentials' => \Grpc\ChannelCredentials::createInsecure(),
    ]);
    $request = new GuestBook();
    $request->setId(1);
    $request->setEmail("haismansyah abdillah");
    $request->setComment("haismansyah abdillah");
    list($response, $status) = $client->GetData($request)->wait();
    if ($status->code !== \Grpc\STATUS_OK) {
        echo "ERROR: " . $status->code . ", " . $status->details;
        exit(1);
    }
    return response()->json($response->getMessage(), 200);
});
