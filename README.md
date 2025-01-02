# php-docker-starter
A simple starter project for PHP development using Docker. This repository includes a basic setup with a Dockerfile to streamline the process of creating and running PHP applications in a containerized environment. Perfect for developers looking to quickly get up and running with PHP and Docker.

# Setup

 - Ensure you have Docker installed
 - `git clone` this repository
 - `sudo docker build -t php-docker-starter .` 
 - `sudo docker run -p 80:80 php-docker-starter`
 - If port 80 already in use, can change another port. eg :81:80
