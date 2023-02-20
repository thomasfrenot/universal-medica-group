# Universal Medica Group

## Pré-requis
Vous devez disposer de docker installé sur votre machine.

## Installation
cloner le repo `git clone git@github.com:thomasfrenot/universal-medica-group.git`

lancer l'environnement `docker-compose up -d`

lancer un composer install
`docker-compose exec php-fpm composer install`

charger les utilisateurs en bdd `docker-compose exec php-fpm php bin/console doctrine:fixtures:load`

consulter l'url : `http://localhost:26000/`

Utilisateur / mot de passe (Espace) :

- frontend@test.dev / universal (Espace utilisateur)
- backend@test.dev / universal (Espace administrateur)
