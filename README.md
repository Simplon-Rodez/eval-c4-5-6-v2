# Évaluation C4, C5 et C6 - v2

## Compétences concernées :

- **Développer une interface utilisateur**
- **Développer des composants d'accès aux données**
- **Développer des pages web en lien avec une base de données**

## Objectifs

- **_Créer une application_** de gestion de stock pour une épicerie en
  utilisant la base de données de l'évaluation C2-C3-v2 avec les pages
  suivantes :

	- une page d'accueil qui donne accès aux pages suivantes :
        - statistiques
        - historique
        - saisie de mouvement
        - liste articles
        - création article
        - modification article

    - la page « Statistiques » :
        cette page affiche la valeur totale du stock et la valeur par
        catégorie.

    - la page « Historique » affiche
        - La liste des mouvements de stock en ordre chronologique

    - la page « Saisie de mouvement »
        Chaque mouvement a les éléments suivants :
        - type de mouvement
        - sens du mouvement
        - article
        - quantité

    - une page « Liste articles » qui contient :
        - une liste de tous les articles
        - chaque élément de la liste est cliquable et envoie vers une page
          de modification
        - chaque élément de la liste est accompagné d'un bouton pour
          pour supprimer l'article
        - un bouton pour créer un nouvel article

    - une page pour modifier un article existant
        - un formulaire qui couvre toutes les colonnes de la table (sauf
          l'ID)

    - une page pour créer un nouvel article
        - un formulaire qui couvre toutes les colonnes de la table (sauf
          l'ID)

- **_Installer la base de données_** (tables et données).
	Créer les migrations pour les tables et les relations.

- **_Créer les composants d'accès aux données_**
    Développer les modèles et relations.

- **_Suivre le design pattern MVC, et bien séparer les trois types de modules_**
    Implémenter toutes les routes, contrôleurs, modèles et vues.
    
- **_Faire du versioning avec git._**

## Réalisation

- Durée : 3 jours
- Équipe : solo

## Rendu

Le projet complet dans un repository sur GitHub, GitLab ou Bitbucket.

## Ressources

- La base de données de l'évaluation C2-C3-v2
- L'utilisation de Bootstrap est autorisé
- Le framework backend à utiliser est Laravel
- Les composants Module, View et Controller doivent être séparés
- Le code doit être documenté en anglais
- Le code doit être formaté suivant les règles du PSR-2

## Liens utiles

- [Bootstrap](https://getbootstrap.com/)
- [PSR-2](https://www.php-fig.org/psr/psr-2/)
- [Laravel](https://laravel.com/)
- [MySQL](https://www.mysql.com/)
- [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)
