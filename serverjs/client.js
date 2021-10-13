//Importing GRPC and the proto loader
const grpc = require('@grpc/grpc-js');
const loader = require('@grpc/proto-loader');
// const message = require('./guestbook_pb')
//reads the proto
const packageDefinition = loader.loadSync("guestbook.proto", {
    keepCase: true,
    longs: String,
    enums: String,
    defaults: true,
    oneofs: true,
});

//Loads the proto file to be used in constant pkg
const pkg = grpc.loadPackageDefinition(packageDefinition);

const client = new pkg.GuestBookService("localhost:50051", grpc.credentials.createInsecure());
client.list(null, (error, res) => {
    if (!error) {
        console.log(res)
    } else {
        console.error(error)
    }
})