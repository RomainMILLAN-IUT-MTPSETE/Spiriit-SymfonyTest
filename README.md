
# Spiriit-Test-Symfony
Repository pour le test de l'entreprise **Spiriit**, réalisé par **Romain MILLAN**.

## Installation du projet

### Prérequis
Pour pouvoir utiliser ce site web il vous faudrait plusieurs prérequis:
- PHP supérieur à __**8.1**__ (*Pour voir la version faite `php -v`*) que vous pouvez [télécharger ici](https://www.php.net/downloads)

- Composer que vous pouvez [télécharger ici](https://getcomposer.org/)

- Symfony CLI que vous pouvez [télécharger ici](https://symfony.com/download)
- GIT que vous pouvez [télécharger ici](https://git-scm.com/downloads)


### Télécharger le dossier
Commencer par ouvrir un terminal et render vous dans un dossier vierge, puis télécharger le projet avec GIT `git clone https://github.com/Wabez3ter/Spiriit-test-symfony.git`.

Suite à ceci, rendez-vous dans le dossier contenant le site avec `cd Spiriit-test-symfony`


### Charger les fixtures
Pour cette étape il vous faudrait télécharger Symfony runtime (`composer require symfony/runtime`), mais aussi Doctrine (`composer require --dev doctrine/doctrine-fixtures-bundle
`) 

Pour pouvoir chargers les fixtures il suffit d'utiliser la commande `php bin/console doctrine:fixtures:load`


### Compilation des assets
Pour cette étape il vous faudrait télécharger Symfony Encore (`composer require symfony/webpack-encore-bundle`, `npm install`)

Pour compiler les assets il suffit de lancer la commande `npm run watch`


### Lancer le serveur
Finalement il vous suffira de faire la commande `symfony server:start` pour pouvoir lancer le serveur de test


## Test Unitaires & Fonctionnel
Pour faire utiliser les tests il vous suffit d'utiliser la commande `php bin/phpunit`