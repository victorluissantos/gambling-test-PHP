## Installation

Program requires [Laravel](https://laravel.com/docs/7.x) v7.x to run.

### With Docker
Donwload and install the [Laradocker](https://laradock.io/) and start the server containers.
```sh
cd dillinger
git clone https://github.com/Laradock/laradock.git
cp .env.example .env
docker-compose up nginx mysql workspace
```

1. To enter the workspace container and run the php commands 
```sh
docker ps
```
2. Get the workspace container id 

```sh
docker exec -ti <id_container> sh -c /bin/sh
```

## Start Laravel

For start the Laravel for the first time...
```sh
composer update
php artisan key:generate
php artisan serve
```

For create table and insert rows from JSON file
```sh
php artisan migrate
php artisan db:seed --class=AffiliateSeeder
```

## Plugins
The Program is currently extended with the following plugins.
Instructions on how to use them in your own application are linked below.

| Plugin | WebSite |
| ------ | ------ |
| Boostrap V5.x | [https://getbootstrap.com/docs/5.0/]


#  ✨Development
Victor Luis dos Santos

- https://github.com/victorluissantos
- https://stackoverflow.com/users/39246/subgurim
- https://linkedin.com/in/victor-luis-santos/