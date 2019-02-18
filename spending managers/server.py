import socket
s=socket.socket(socket.AF_INET,socket.SOCK_STREAM)
host="localhost"
port=80
s.bind((host,port))
s.listen(5)
client,addr=s.accept()
data =client.recv(1024)
print("client : - ",data.decode('ascii')[::-1],"address",addr)
s.close()
input("press enter to exut..")