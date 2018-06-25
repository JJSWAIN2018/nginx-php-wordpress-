nx-php-wordpress
A Dockerfile that installs the latest wordpress, nginx, php-apc and php-fpm.

NB: A big thanks to edwn who did most of the hard work on the wordpress parts!

Installation
The easiest way to get this docker image installed is to pull the latest version from the Docker registry:

$ docker pull JJSWAIN2018/nginx-php-wordpress 
If you'd like to build the image yourself then:

$ git clone https://github.com/JJSWAIN2018/nginx-php-wordpress.git
$ cd nginx-php-wordpress
$ sudo docker build -t="JJSWAIN2018/nginx-php-wordpress" .
Usage
To spawn a new instance of wordpress on port 80. The -p 80:80 maps the internal docker port 80 to the outside port 80 of the host machine.

Start your newly created docker.

$ sudo docker start docker-wordpress-nginx
After starting the docker-wordpress-nginx check to see if it started and the port mapping is correct. This will also report the port mapping between the docker container and the host machine.

$ sudo docker ps

0.0.0.0:80 -> 80/tcp nginx-php-wordpress 
You can the visit the following URL in a browser on your host machine to get started:

http://127.0.0.1:80
