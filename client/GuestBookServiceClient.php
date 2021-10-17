<?php
// GENERATED CODE -- DO NOT EDIT!

namespace ;

/**
 * package protobuf.guestbook;
 */
class GuestBookServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \PBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function List(\PBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/GuestBookService/List',
        $argument,
        ['\GuestBookList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \GuestBook $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetData(\GuestBook $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/GuestBookService/GetData',
        $argument,
        ['\ResGuestBook', 'decode'],
        $metadata, $options);
    }

}
