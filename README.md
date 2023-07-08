# Application MVC en PHP

## Introduction

Cette application web est une démonstration simple d'une structure Modèle-Vue-Contrôleur (MVC) en PHP, utilisant des packages de Symfony, Composer et Twig pour le rendu des vues. Elle comprend des fonctionnalités de base telles que l'inscription des utilisateurs et l'affichage de la liste des utilisateurs enregistrés.

## Structure du projet

- `public/`: le dossier public contenant le fichier `index.php`, point d'entrée de l'application.
- `src/`: le dossier source contenant les sous-dossiers `Controller/` et `Routing/`, ainsi que les fichiers de modèle.
- `src/Controller/`: contient tous les contrôleurs de l'application, y compris `IndexController`, `RegistrationController` et d'autres.
- `src/Routing/`: contient le fichier `Router.php` qui gère le routage des demandes entrantes vers les contrôleurs appropriés.
- `src/Models/`: contient les modèles de l'application, y compris le modèle `User.php`.
- `templates/`: contient les fichiers de vue Twig pour le rendu de la page.

- BDD SQL : vous trouverez le fichier sql permetant d'importer la bdd à la racine du projet

## Fonctionnalités

### Inscription des utilisateurs

- Les utilisateurs peuvent s'inscrire en remplissant un formulaire sur la page `/register`.
- Les informations de l'utilisateur (nom d'utilisateur et mot de passe) sont ensuite stockées dans une base de données MySQL. Le mot de passe est haché avant d'être stocké pour des raisons de sécurité.
- Si l'utilisateur essaie de s'inscrire avec un nom d'utilisateur déjà pris, une erreur est affichée.
- Après l'inscription, l'utilisateur est redirigé vers la page d'accueil avec un message indiquant que l'inscription a été réussie.

### Affichage des utilisateurs

- Sur la page d'accueil (`/`), tous les noms d'utilisateur enregistrés sont affichés dans une liste.
- Chaque fois que la page d'accueil est chargée, elle récupère la liste des utilisateurs de la base de données et l'affiche.
