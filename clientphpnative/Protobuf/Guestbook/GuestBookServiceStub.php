<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Protobuf\Guestbook;

/**
 */
class GuestBookServiceStub {

    /**
     * @param \Protobuf\Guestbook\PBEmpty $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Protobuf\Guestbook\GuestBookList for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function List(
        \Protobuf\Guestbook\PBEmpty $request,
        \Grpc\ServerContext $context
    ): ?\Protobuf\Guestbook\GuestBookList {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Protobuf\Guestbook\GuestBook $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Protobuf\Guestbook\ResGuestBook for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetData(
        \Protobuf\Guestbook\GuestBook $request,
        \Grpc\ServerContext $context
    ): ?\Protobuf\Guestbook\ResGuestBook {
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
            '/protobuf.guestbook.GuestBookService/List' => new \Grpc\MethodDescriptor(
                $this,
                'List',
                '\Protobuf\Guestbook\PBEmpty',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/protobuf.guestbook.GuestBookService/GetData' => new \Grpc\MethodDescriptor(
                $this,
                'GetData',
                '\Protobuf\Guestbook\GuestBook',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
