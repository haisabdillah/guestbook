<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: greet.proto

namespace Protobuf\Greet;

class Greet
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
greet.protoprotobuf.greet"
HelloRequest
name (	"

HelloReply
message (	2O
GreeterD
SayHello.protobuf.greet.HelloRequest.protobuf.greet.HelloReplyB�Protobuf\\Greetbproto3'
        , true);

        static::$is_initialized = true;
    }
}
