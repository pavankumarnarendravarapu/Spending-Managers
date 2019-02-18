import socket
s=socket.socket(socket.AF_INET,socket.SOCK_STREAM)
host="localhost"
port=80
s.connect((host,port))
z=input("enter data to send : ")
s.sendall(z.encode('ascii'))
s.close()
input("press enter to exit..")