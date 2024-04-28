# Votre ToDoList AVEC BASE DE DONNÉES

Bienvenue dans le projet **Votre ToDoList** ! Ce projet implémente une application de gestion de tâches simple et efficace en PHP sur une page web.

## Table des matières

- [Aperçu](#aperçu)
- [Démonstration](#démonstration)
- [Tester en ligne](#tester-en-ligne)
- [Fonctionnalités](#fonctionnalités)
- [Comment utiliser](#comment-utiliser)
- [Installation](#installation)
- [Configuration de la base de données](#configuration-de-la-base-de-données)
- [Contribuer](#contribuer)
- [Licence](#licence)

## Aperçu

**Votre ToDoList** est une application de gestion de tâches qui vous permet d'ajouter, de modifier et de supprimer des tâches à effectuer. Vous pouvez enregistrer vos tâches dans la base de données et les consulter en cas de besoin.

![Capture d'écran de l'application](/demo/todo.png)

## Démonstration

- [Voir la vidéo de démonstration](/demo/videodemo.gif)

## Tester en ligne

Vous pouvez tester directement le projet en ligne sur le lien : [Test en ligne ici](https://nomogabrieltodolist.000webhostapp.com/).

## Fonctionnalités

- Ajouter des tâches à la liste.
- Modifier ou supprimer des tâches existantes.
- Gérer les tâches à l'aide de boutons d'édition et de suppression.

## Comment utiliser

1. Clonez ou téléchargez ce projet sur votre ordinateur.
2. Accédez à votre répertoire local où se trouve le projet.
3. Lancez un serveur local (ex : XAMPP, WAMP, ou un autre serveur web local).
4. Accédez à l'URL fournie par votre serveur local pour ouvrir `index.php` dans un navigateur web.
5. Commencez à utiliser l'application pour gérer vos tâches !

## Installation

Aucune installation supplémentaire n'est nécessaire pour les fichiers du projet. Vous devez cependant configurer une base de données en local pour utiliser l'application.

## Configuration de la base de données

Pour utiliser cette application, vous avez besoin d'une base de données en local. Voici comment la configurer :

1. **Choisissez un gestionnaire de base de données** : Nous vous recommandons d'utiliser XAMPP (pour Windows, macOS ou Linux), WAMP (pour Windows) ou MAMP (pour macOS) pour une gestion facile des bases de données MySQL.
   
2. **Créez une base de données** : Ouvrez le gestionnaire de base de données de votre choix (par exemple, phpMyAdmin pour XAMPP ou WAMP) et créez une nouvelle base de données nommée `todos`.

3. **Créez une table** : Dans la base de données `todo`, créez une table `todos` avec les colonnes suivantes :
    - `id` : Entier (clé primaire, auto-incrément).
    - `Title` : VARCHAR (titre de la tâche à effectuer).

vous pouvez visualiser ma table dans ma base de donnee ci dessous.
![voici un exemple](/demo/bd.png)

4. **Modifiez `database.php`** : Dans votre projet, ouvrez le fichier `database.php` et modifiez les informations de connexion à votre base de données (nom d'hôte, nom de la base de données, nom d'utilisateur, mot de passe) selon votre configuration.

## Contribuer

Les contributions à ce projet sont les bienvenues ! N'hésitez pas à soumettre des problèmes, suggestions ou améliorations via GitHub.

## Licence

Ce projet est sous licence [MIT](licence.txt). Vous pouvez consulter le fichier `licence.txt` pour plus de détails.
