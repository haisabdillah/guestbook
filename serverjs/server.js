const grpc = require('@grpc/grpc-js');
const loader = require('@grpc/proto-loader');
const packageDefinition = loader.loadSync('guestbook.proto', {
    keepCase: false,
    longs: String,
    enums: String,
    defaults: true,
    oneofs: true,
});

const pkg = grpc.loadPackageDefinition(packageDefinition);
//Creates the new server
const server = new grpc.Server();

const guestBook = [
    { id: '1', emai: 'Note 1', comment: 'Content 1' },
    { id: '2', email: 'Note 2', comment: 'Content 2' }
]

//Services
server.addService(pkg.GuestBookService.service, {
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



