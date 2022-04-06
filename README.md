# Following tutorial:
https://linuxhint.com/lamp_server_docker/

## Running instructions for LAMP
### Installation
```
# Spin up or to re-initialize and re-spin up
./spin_up.bash
```
```
./spin_down.bash
```
## Useful Commands
To see port mapping after <code>docker-compose up</code>
```
docker-compose ps
```
To see the network for the created containers
```
docker network ls
docker inspect NETWORKNAME
```
## Visit the PHP admin;
```
http://localhost:5000/
#or
http://YOURIPADDRESS:5000/
```