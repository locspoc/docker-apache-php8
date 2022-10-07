# Docker PHP Testing

## Test 1: Build an Apache Docker httpd image with a Dockerfile Example

YouTube link: https://www.youtube.com/watch?v=I66s-6NzkL0

**Build image**

docker built -t apache-docker example .

**Run container, localhost:80**

docker run -d --name httpd-docker-01 -p 80:80 apached-docker-example

## Test 2: How to run a MySQL server in a Docker container and connect to it from the host machine

YouTube link: https://www.youtube.com/watch?v=20om-9Gwuc0

docker --version

docker pull mysql:8

docker run --name mysql_test -e MYSQL_ROOT_PASSWORD=123 -d mysql:8

docker exec mysql_test mysql --version

docker exec mysql_test mysql -uroot -p123 -e 'show databases;'

**Interactive terminal**

docker exec -it mysql_test mysql -uroot -p123 -e 'show databases;'

**MYSQL Native Terminal**

docker exec -it mysql_test mysql -uroot -p123

show databases;

create database test1;

**How to install MySQL command line on MacOS**

YouTube link: https://www.youtube.com/watch?v=101u5Ssqbyw
