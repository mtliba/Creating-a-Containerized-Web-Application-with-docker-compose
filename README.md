# Creating-a-Containerized-Web-Application-with-docker-compose
* Tutorial : basics of setting up a Dockerized development environment With docker-compose :

in this application we’ve created a development’s environment using docker compose to
create a two separate containers based on microservices the first one contain a web serevr
apache and php ant the second one contain mysql database ,we established the connection due to mysqli module .

*  what is docker compose file :

Compose is a tool for defining and running multi-container Docker applications.
Compose was introduced so we do not have to build and start every container manually.
Compose was initially created for development and testing purpose. Docker with recent
releases have made compose yml to be used to create a docker swarm.

* what is microservices :

is an architectural style that structures an application as a collection of small
autonomous services unlike the monolithic application , microservices modeled around a business domain.

* my docker compose file :

could to define and run multi-containers I’ve define two services :
1-the web service in isolated container I named it ’php’ build it above the php:7.3.3-apache image . and
mount it to php diroctory where exist my index.php using docker volume . and mapped
the port 8000 for the container and the port 80 for the apache server by default. 
2-the db sevice also in isolated container I name it ’mysql’ above the mysql:8.0 image
aftreward to customize the boot of mysql I used a native password identification then
restart the service if any configuration changed then I specified the environment with
credentials to connect to mysql finally expose the local port 6033 and 3306 for mysql for
the dockerfile I ve updated an upgraded the packages and thier versions then install the
mysqli module for php so i ll beable to connect to db .
the php code is to verify if theconnection to the DB established .

* to run it on your local machine :
clone this repository :
```shell
git clone https://github.com/mtliba/Creating-a-Containerized-Web-Application-with-docker-compose.git
```
run the fellowing command :
 In a terminal window from the folder in which you added docker-compose.yml file
```shell
docker-compose up --build
```
to stop all services :

```shell
docker-compose down
```
to list images :

```shell
docker image ls
```
to list Containers :

```shell
docker container ls -a
```
