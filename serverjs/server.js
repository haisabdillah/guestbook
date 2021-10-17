var services = require('./guestbook_grpc_pb');

const grpc = require('@grpc/grpc-js');

//Creates the new server
const server = new grpc.Server();

const guestBook = [
    { id: '1', emai: 'Note 1', comment: 'Content 1' },
    { id: '2', email: 'Note 2', comment: 'Content 2' }
]

//Services
server.addService(services.GuestBookServiceService, {
    list: (_, callback) => {
        callback(null, guestBook);
    },
});

//bind the server on local host and port using constant PORT
//IMPORTANT: for passing conts variables use ´´ in comments instead of ''
server.bindAsync(
    "localhost:50051",
    grpc.ServerCredentials.createInsecure(),
    (error, port) => {
        console.log("Server running at http://localhost:50051");
        server.start();
    }
);



