<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Protobuf\Greet;

/**
 * The greeting service definition.
 */
class GreeterStub {

    /**
     * Sends a greeting
     * @param \Protobuf\Greet\HelloRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Protobuf\Greet\HelloReply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function SayHello(
        \Protobuf\Greet\HelloRequest $request,
        \Grpc\ServerContext $context
    ): ?\Protobuf\Greet\HelloReply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
    public final function getMethodDescriptors(): array
    {
        return [
            '/protobuf.greet.Greeter/SayHello' => new \Grpc\MethodDescriptor(
                $this,
                'SayHello',
                '\Protobuf\Greet\HelloRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
