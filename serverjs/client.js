
const grpc = require('@grpc/grpc-js');
var services = require('./greet_grpc_pb');
var messages = require('./greet_pb');


const client = new services.GreeterClient('grpc.dimiegroup.com', grpc.credentials.createInsecure());
var request = new messages.HelloRequest();
request.setName('abi');
client.sayHello(request, (err, res) => {
    if (!err) {
        console.log(res)
    } else {
        console.error(err)
    }
})