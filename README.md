# Universal Medica Group

## Pré-requis
Vous devez disposer de docker installé sur votre machine.

## Installation
cloner le repo `git clone git@github.com:thomasfrenot/universal-medica-group.git`

Lancer l'environnement `docker-compose up -d`

Lancer l'installation des composants (composer/yarn)
`docker-compose exec php-fpm composer install`

Charger la structure de la bdd 
`docker-compose exec php-fpm php bin/console doctrine:schema:create`

Charger les utilisateurs en bdd 
`docker-compose exec php-fpm php bin/console doctrine:fixtures:load`

## Consultation du l'application
`http://localhost:26000/`

Utilisateur / mot de passe (Espace) :

- frontend@test.dev / universal (Espace utilisateur)
- backend@test.dev / universal (Espace administrateur)
