echo Stopping old docker containers
docker-compose stop $(docker ps -aq)

echo Building docker containers
docker-compose up -d

echo Migrating database
docker-compose exec app php artisan migrate:fresh --seed

echo Installing composer
docker-compose exec app composer install