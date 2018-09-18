# cynergie-portail 

## Using Laravel 5.6 , Vuejs and  docker to deploy 

### This project reassemble

- Cynergie website
- Cynergie portail
- Cynergie data api


### Deployment

- Change laravel environment file name and add the production variables

```
mv .env.example .env
```

- Build the laravel website image (takes time)

```
docker-compose build
```
or 

```
docker-compose up --build -d
```
- run the containers by default the website is binded to `localhost:4000`

```
docker-compose up -d
```

- run migration inside cynergieportail container

```
docker exec -it cynergieportail bash
```
```
php artisan migrate
```

- run seeder inside cynergieportail container

```
php artisan db:seed
```

#### Help

- to run bash inside a docker container

```
docker exec -it cynergieportail bash
```

- to run a command in the container ; laravel exemple:

```
docker-compose exec cynergieportail php artisan list
```

- to run a migration for database ; laravel example:

```
docker-compose run laravel php artisan migrate
```
