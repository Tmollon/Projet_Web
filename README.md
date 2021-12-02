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

Sans container il est nécéssaire d'avoir un environnement de developpement local ( serveur LAMP ), celui ci peut differer en configuration de l'environnement de production 