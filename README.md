
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
Finalement, il vous suffira de faire la commande `symfony server:start` pour pouvoir lancer le serveur de test


## Test Unitaires & Fonctionnel
Pour faire utiliser les tests il vous suffit d'utiliser la commande `php bin/phpunit`

## Fonctionnalités avancées

✕ Fournir une configuration Docker / Docker Compose pour faire tourner le projet

---

✕ Installer un espace d'administration permettant de gérer les produits (easyadmin)

✕ Sécuriser cet espace d’administration (utilisateur “admin” avec pour mot de passe
“password” de type in_memory)

---

✕ Produit : ajouter une photo visible sur les pages d’accueil et de détails

✕ Produit : ajouter un slug qui servira à afficher la page de détails

---

✕ Page panier : pouvoir modifier les quantités

**✓** Page panier : pouvoir supprimer un produit (`/panier` - `/panier/remove/{id}`)

---

✕ Proposer un point d’API renvoyant l’intégralité des produits au format JSON

---

**✓** Proposer un export au format CSV de l’intégralité des produits depuis une
commande console dédiée (`php bin/console app:exportProduct <file>.csv`)

---

✕ Permettre au visiteur de choisir la langue du site : fr ou en (les produits et les urls ne sont pas à traduire, seule l’interface est à adapter)

---

✕ Tests plus complets