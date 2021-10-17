// GENERATED CODE -- DO NOT EDIT!

'use strict';
var grpc = require('@grpc/grpc-js');
var guestbook_pb = require('./guestbook_pb.js');

function serialize_Empty(arg) {
  if (!(arg instanceof guestbook_pb.Empty)) {
    throw new Error('Expected argument of type Empty');
  }
  return Buffer.from(arg.serializeBinary());
}

function deserialize_Empty(buffer_arg) {
  return guestbook_pb.Empty.deserializeBinary(new Uint8Array(buffer_arg));
}

function serialize_GuestBookList(arg) {
  if (!(arg instanceof guestbook_pb.GuestBookList)) {
    throw new Error('Expected argument of type GuestBookList');
  }
  return Buffer.from(arg.serializeBinary());
}

function deserialize_GuestBookList(buffer_arg) {
  return guestbook_pb.GuestBookList.deserializeBinary(new Uint8Array(buffer_arg));
}


var GuestBookServiceService = exports.GuestBookServiceService = {
  list: {
    path: '/GuestBookService/List',
    requestStream: false,
    responseStream: false,
    requestType: guestbook_pb.Empty,
    responseType: guestbook_pb.GuestBookList,
    requestSerialize: serialize_Empty,
    requestDeserialize: deserialize_Empty,
    responseSerialize: serialize_GuestBookList,
    responseDeserialize: deserialize_GuestBookList,
  },
};

exports.GuestBookServiceClient = grpc.makeGenericClientConstructor(GuestBookServiceService);
