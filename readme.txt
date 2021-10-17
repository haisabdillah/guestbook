//home/haisabdillah/Documents/dev/grpc/bazel-bin/external/com_google_protobuf/protoc  --php_out=.  --grpc_out=generate_server:. --plugin=protoc-gen-grpc=/home/haisabdillah/Documents/dev/grpc/bazel-bin/src/compiler/grpc_php_plugin -I../protos  ../protos/*.proto


grpc_tools_node_protoc --proto_path=protos\  --js_out=import_style=commonjs,binary:Protobuf --grpc_out=grpc_js:Protobuf protos\ /*.proto