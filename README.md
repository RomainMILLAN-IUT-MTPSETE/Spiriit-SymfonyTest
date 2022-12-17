
# Spiriit-Test-Symfony

Repository pour le test de l'entreprise Spiriit, réalisé par Romain MILLAN.

## Installation du projet

### Prérequis
Pour pouvoir utiliser le site avec symfony il est important d'avoir une version de PHP suppérieur à 8.1 pour voir ceci faite `php -v`

Il vous faut aussi l'utilitaire composer que vous pouvez [télécharger ici](https://getcomposer.org/)

Et finalement il vous faudrat Symfony CLI que vous retrouverez sur [ce lien](https://symfony.com/download)

Si durant la mise en place du serveur il vous manque symfony il suffit d'utiliser la commande `composer require symfony/runtime`

### Télécharger le dossier
Commencer par ouvrir un terminal et render vous dans un dossier vierge, puis télécharger le projet avec GIT:
`git clone https://github.com/Wabez3ter/Spiriit-test-symfony.git`.

Suite à ceci, rendez vous dans le dossier contenant le site avec `cd Spiriit-test-symfony`

### Charger les fixtures
Pour pouvoir chargers les fixtures il suffit d'utiliser la commande `php bin/console doctrine:fixtures:load`

### Compilation des assets
Pour cette étape il vous faudrat télécharger Symfony Encore (`composer require symfony/webpack-encore-bundle`)
Pour compiler les assets il suffit de lancer la commande `npm run watch`

### Lancer le serveur
Finalement il vous suffira de faire la commande `symfony server:start` pour pouvoir lancer le serveur de test


## Les Test
Les test ne sont pas encore implémenter mais si vous voulez essayer de les utiliser il suffit d'utiliser la commande `php bin/phpunit`