# Expure - Votre plateforme artistique en ligne

Expure est une plateforme artistique en ligne qui permet aux artistes d'exposer et de vendre leurs créations artistiques, allant des vêtements, des peintures et photographies aux sculptures et objets d'art uniques. Les visiteurs peuvent découvrir des œuvres d'art inspirantes et, s'ils le souhaitent, acheter leurs pièces préférées en ligne.

## Fonctionnalités

- Inscription et connexion des utilisateurs : Les utilisateurs peuvent s'inscrire et se connecter à leur compte pour gérer leur profil.

- Téléchargement d'œuvres d'art : Les artistes peuvent télécharger des images de leurs œuvres d'art, ajouter des descriptions et définir des prix pour la vente.

- Catalogue d'œuvres d'art : Les visiteurs peuvent parcourir un catalogue complet d'œuvres d'art, filtrer par catégorie ou artiste, et voir les détails des œuvres.

- Panier d'achats : Les visiteurs peuvent ajouter des œuvres d'art à leur panier d'achats et procéder à la commande en fournissant leurs coordonnées.

- Profils d'artistes : Chaque artiste dispose d'un profil public où il peut présenter sa biographie, ses réalisations et ses projets artistiques.

## Configuration requise

- PHP 7.4 ou version ultérieure
- MySQL 5.7 ou version ultérieure
- Un serveur web compatible avec PHP (Apache, Nginx, etc.)

## Installation

1. Clonez ce dépôt dans le répertoire de votre serveur web :
2. Créez une nouvelle base de donnée en important le fichier /Core/bbd_expure.sql
3. Adaptez les données de connexion vers votre bdd dans /Core/Db.php

Utilisateurs exemples:

| Email | Password | isAdmin |
| :---- |:--------:|--------:|
| test@test.ch | 123456   |   false |
| admin@admin.ch | 123456 |   true  |
