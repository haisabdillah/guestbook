const services = require('./Protobuf/guestbook_grpc_pb');
const messages = require('./Protobuf/guestbook_pb');

const grpc = require('@grpc/grpc-js');

function getData(call, callback) {
    let reply = new messages.ResGuestBook();
    reply.setMessage(call.request.getId() + ' ' + call.request.getEmail() + ' ' + call.request.getComment())
    callback(null, reply);
}

function list(_, callback) {
    const guestBook = [
        { id: '1', email: 'Note 1', comment: 'Content 1' },
        { id: '2', email: 'Note 2', comment: 'Content 2' }
    ]
    callback(null, guestBook);
}

function main() {
    //Creates the new server
    const server = new grpc.Server();
    server.addService(services.GuestBookServiceService, { list: list, getData: getData });
    server.bindAsync(
        "localhost:50051",
        grpc.ServerCredentials.createInsecure(),
        (error, port) => {
            console.log("Server running at http://localhost:50051");
            server.start();
        }
    );
}

main();





