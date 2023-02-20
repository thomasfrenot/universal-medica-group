# Universal Medica Group

## Installation
cloner le repo `git clone git@github.com:thomasfrenot/universal-medica-group.git`

lancer un composer install
`docker-compose exec php-fpm composer install`

charger les utilisateurs en bdd `docker-compose exec php-fpm php bin/console doctrine:fixtures:load`

consulter l'url : `http://localhost:26000/`
