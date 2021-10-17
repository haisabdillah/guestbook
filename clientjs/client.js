
const grpc = require('@grpc/grpc-js');
const services = require('./Protobuf/greet_grpc_pb');
const messages = require('./Protobuf/greet_pb');
const services2 = require('./Protobuf/guestbook_grpc_pb');
const messages2 = require('./Protobuf/guestbook_pb');

function dimie() {
    const client = new services.GreeterClient('grpc.dimiegroup.com', grpc.credentials.createInsecure());
    let request = new messages.HelloRequest();
    request.setName('abi');
    client.sayHello(request, (err, res) => {
        if (!err) {
            console.log(res)
        } else {
            console.error('Code:' + err.code + ' Message:' + err.details)
        }

    })
}

function guest() {
    const client2 = new services2.GuestBookServiceClient('localhost:50051', grpc.credentials.createInsecure());
    let request2 = new messages2.GuestBook();
    request2.setId(12)
    request2.setComment('abinn')
    request2.setEmail('kajhska@gmail.com')
    client2.getData(request2, (err, res) => {
        if (!err) {
            console.log(res)
        } else {
            console.log(err)
        }

    })
}

function book() {
    const client2 = new services2.GuestBookServiceClient('localhost:50051', grpc.credentials.createInsecure());
    let request2 = new messages2.Empty();
    client2.list(request2, (err, res) => {
        if (!err) {
            console.log(res.getGuestbookList())
        } else {
            console.log(err)
        }

    })
}

dimie()
