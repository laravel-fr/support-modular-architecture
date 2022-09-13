# Modular Architecture 
## Installation 
```
docker-compose up --build -d
docker-compose exec app composer update
docker-compose exec app cp .env.example .env
docker-compose exec app php artisan key:generate
```
See http://localhost:8089/