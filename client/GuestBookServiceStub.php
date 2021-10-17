<?php
// GENERATED CODE -- DO NOT EDIT!

namespace ;

/**
 * package protobuf.guestbook;
 */
class GuestBookServiceStub {

    /**
     * @param \PBEmpty $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \GuestBookList for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function List(
        \PBEmpty $request,
        \Grpc\ServerContext $context
    ): ?\GuestBookList {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \GuestBook $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \ResGuestBook for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetData(
        \GuestBook $request,
        \Grpc\ServerContext $context
    ): ?\ResGuestBook {
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
            '/GuestBookService/List' => new \Grpc\MethodDescriptor(
                $this,
                'List',
                '\PBEmpty',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/GuestBookService/GetData' => new \Grpc\MethodDescriptor(
                $this,
                'GetData',
                '\GuestBook',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
