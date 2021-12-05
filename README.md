# Projet_Web
Projet Web de Tom Mollon, Holder Kyllian et Dib Nassim.

## Présentation 

Ce projet à pour but de créer un site inspiré de la série How To Sell Drugs Online Fast.
C'est un site d'ecommerce permettant d'acheter diverses substances licites ou illicites.

Le site est composé d'une page centrale permettant la navigation entre les differentes catégories et pages

### Catégories 

- Acceuil 
- Douce 
- Dure 
- Légale 
- Contact

## Choix techniques

### Containers 

Nous avons choisi d'héberger notre site sur des containers Docker pour plusieur raisons:

#### Séparer les parties du site 

Avec des containers chaque partie de notre site est séparée. En effet la partie Apache qui gère la connexion au clients ainsi que le php est isolée ainsi si elle est attaquée le pirate aura un accès limité à notre machine. 
La partie phpmyadmin qui permet l'administration en graphique de la base de donnée est séparée ce qui pourrai nous permettre à terme d'isoler le container du réseau en maintenant la base de donnée.
Le serveur MySQL est isolé et cela permet de garantir une sécurité plus élevée en ajoutant des couches.

#### L'adaptabilité

Actuellement notre site ne reçoit pas de traffic ( il n'est pas en ligne donc logique ), mais il se pourrait qu'un jour si notre site venait à être hebergé il devienne très populaire et notre infrastructure ne puisse pas suivre les connexions. 
Avec Docker il est très facile de déployer notre application à la volée sur une infrastructure plus performante avec un minimum de configuration ce qui nous permettrait de répondre à la demande grandissante avec fléxibilité et sans intérruption de service.

#### Permettre la mise en place d'un espace de développement et de test privilégié

Sans container il est nécéssaire d'avoir un environnement de developpement local ( serveur LAMP ), celui ci peut differer en configuration de l'environnement de production et donc causer des problèmes lors du déploiement.
Avec nos containers l'environnement de production est identique à l'environnement de développement étant donné que l'environnement de developpement à la même configuration et peut être répliquée à l'infini.
Dans le futur ont peut aussi imaginer avoir un environnement de dev , un de test et un de production dans les conteneurs séparés et lorsqu'on veut envoyer une version en production il nous suffise de remplacer le conteneur de production par celui de dev et ceci permettant une mise à jour avec un minimum d'intéruption.

### Point d'entrée unique

En naviguant sur le site on reste toujours à la racine (index.php) et les différentes pages sont chargées dans le body.
Ceci nous permet plusieur choses:

- Utiliser la session php plus facilement pour gérer le compte utilisateur ainsi que son espace , sa connection etc
- Charger une feuille de style générale pour éviter la répétition de code et simplifier notre CSS
- Charger une seule fois le menu, le header , le footer

### API REST

Nous avons une API REST qui nous permet d'ajouter des produits dans la base de donnée de manière simple mais aussi de consulter tout les produits disponible et leur catégorie.
Nous voulons utiliser l'API pour afficher tout les produits et ensuite permettre au client de faire ses achats 

## Mise en place du site

Récupérez le repo git 
executez    ```sudo apt update```
            ```sudo apt upgrade```
            ```sudo apt install docker docker-compose```
A la racine du répertoire de notre projet
executez ``` docker-compose up -d  ```

Ensuite dans un navigateur ouvrez http://localhost:8080

Connectez vous à php my admin avec l'utilisateur root et le mot de passe MYSQL_ROOT_PASSWORD 

Allez dans la catégorie sql et importez le script SQL/drugs.sql

Une fois la base de donnée enregisté vous pouvez explorer la base de donnée avec php my admin.

Pour voir notre site allez à l'adresse http://localhost/ 

vous pouvez vous connecter sur notre interface avec les logs admin admin 

vous pouvez aussi créer un compte 

## Difficultés techniques 

Nous avons eu des dificultés pour mettre en place l'affichage des produits avec l'api rest et ensuite permettre l'achat de ces produits.
L'api est testable en utilisant un plugin pour firefox nommé restclient
Pour ajouter un produit dans la base on utilise l'adresse http://localhost/REST/produits/lire.php
Puis dans le body de la requète on insère
```
{
    "nom": "Canabis",
    "description": "canabis sativa",
    "prix": "100",
    "categories_id": 2
}
```
## Axes d'améliorations 

Nous aimerions mettre en place l'affichage des produits ainsi que la plateforme de vente utilisant notre api rest.

Nous autions bien aimé améliorer la sécurité de notre site: notamment en mettant en place le controle des mots de passe (on peut se connecter peut importe le mot de passe)

L'interface de notre site a de nombreux bugs de styles sur lequels nous aurions aimé passer plus de temps.