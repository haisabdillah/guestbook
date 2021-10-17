<?php

require dirname(__FILE__).'/vendor/autoload.php';

function main()
{
    $client = new \Protobuf\Guestbook\GuestBookServiceClient("localhost:50051", [
        'credentials' => \Grpc\ChannelCredentials::createInsecure(),
    ]);
    $request = new \Protobuf\Guestbook\GuestBook();
    $request->setId(1);
    $request->setEmail("haismansyah abdillah");
    $request->setComment("haismansyah abdillah");
    list($response, $status) = $client->GetData($request)->wait();
    if ($status->code !== \Grpc\STATUS_OK) {
        echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
        exit(1);
    }
    echo $response->getMessage() . PHP_EOL;
    
}

function dimie()
{
    $client = new \Protobuf\Greet\GreeterClient("grpc.dimiegroup.com", [
        'credentials' => \Grpc\ChannelCredentials::createInsecure(),
    ]);
    $request = new \Protobuf\Greet\HelloRequest();
    $request->setName("haismansyah abdillah");
    list($response, $status) = $client->SayHello($request)->wait();
    if ($status->code !== \Grpc\STATUS_OK) {
        echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
        exit(1);
    }
    echo $response->getMessage() . PHP_EOL;
    
}

main();