// GENERATED CODE -- DO NOT EDIT!

'use strict';
var grpc = require('@grpc/grpc-js');
var guestbook_pb = require('./guestbook_pb.js');

function serialize_protobuf_guestbook_Empty(arg) {
  if (!(arg instanceof guestbook_pb.Empty)) {
    throw new Error('Expected argument of type protobuf.guestbook.Empty');
  }
  return Buffer.from(arg.serializeBinary());
}

function deserialize_protobuf_guestbook_Empty(buffer_arg) {
  return guestbook_pb.Empty.deserializeBinary(new Uint8Array(buffer_arg));
}

function serialize_protobuf_guestbook_GuestBook(arg) {
  if (!(arg instanceof guestbook_pb.GuestBook)) {
    throw new Error('Expected argument of type protobuf.guestbook.GuestBook');
  }
  return Buffer.from(arg.serializeBinary());
}

function deserialize_protobuf_guestbook_GuestBook(buffer_arg) {
  return guestbook_pb.GuestBook.deserializeBinary(new Uint8Array(buffer_arg));
}

function serialize_protobuf_guestbook_GuestBookList(arg) {
  if (!(arg instanceof guestbook_pb.GuestBookList)) {
    throw new Error('Expected argument of type protobuf.guestbook.GuestBookList');
  }
  return Buffer.from(arg.serializeBinary());
}

function deserialize_protobuf_guestbook_GuestBookList(buffer_arg) {
  return guestbook_pb.GuestBookList.deserializeBinary(new Uint8Array(buffer_arg));
}

function serialize_protobuf_guestbook_ResGuestBook(arg) {
  if (!(arg instanceof guestbook_pb.ResGuestBook)) {
    throw new Error('Expected argument of type protobuf.guestbook.ResGuestBook');
  }
  return Buffer.from(arg.serializeBinary());
}

function deserialize_protobuf_guestbook_ResGuestBook(buffer_arg) {
  return guestbook_pb.ResGuestBook.deserializeBinary(new Uint8Array(buffer_arg));
}


var GuestBookServiceService = exports.GuestBookServiceService = {
  list: {
    path: '/protobuf.guestbook.GuestBookService/List',
    requestStream: false,
    responseStream: false,
    requestType: guestbook_pb.Empty,
    responseType: guestbook_pb.GuestBookList,
    requestSerialize: serialize_protobuf_guestbook_Empty,
    requestDeserialize: deserialize_protobuf_guestbook_Empty,
    responseSerialize: serialize_protobuf_guestbook_GuestBookList,
    responseDeserialize: deserialize_protobuf_guestbook_GuestBookList,
  },
  getData: {
    path: '/protobuf.guestbook.GuestBookService/GetData',
    requestStream: false,
    responseStream: false,
    requestType: guestbook_pb.GuestBook,
    responseType: guestbook_pb.ResGuestBook,
    requestSerialize: serialize_protobuf_guestbook_GuestBook,
    requestDeserialize: deserialize_protobuf_guestbook_GuestBook,
    responseSerialize: serialize_protobuf_guestbook_ResGuestBook,
    responseDeserialize: deserialize_protobuf_guestbook_ResGuestBook,
  },
};

exports.GuestBookServiceClient = grpc.makeGenericClientConstructor(GuestBookServiceService);
