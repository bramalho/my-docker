# Runner Docker
Docker with Nginx, PHP and MySQL

#### Start the application
```
sudo docker-compose up -d
```
Open your browser [http://localhost](http://localhost)


#### Logs
```
sudo docker-compose up -d
```

#### Stop the application
```
sudo docker-compose down -v
```

#### Docker utils
- List all containers: `docker ps`
- Remove all containers: `docker rm -f $(docker ps -a -q)`
