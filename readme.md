# Docker PHP Testing

## Test 1: Build an Apache Docker httpd image with a Dockerfile Example

YouTube link: https://www.youtube.com/watch?v=I66s-6NzkL0

**Build image**
docker built -t apache-docker example .

**Run container, localhost:80**
docker run -d --name httpd-docker-01 -p 80:80 apached-docker-example
