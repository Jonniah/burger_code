# 🍔 Burger Code - Application de Gestion de Menu de Restaurant

Une application web complète (Front-office & Back-office) développée en PHP natif pour gérer et afficher le menu d'un restaurant de restauration rapide. Ce projet a été réalisé pour démontrer la maîtrise des concepts fondamentaux du développement web dynamique (PHP/MySQL).

## 🎯 Fonctionnalités

### Partie Client (Front-office)
*   Affichage dynamique du menu du restaurant.
*   Tri des plats par catégories grâce à un système d'onglets interactifs.
*   Design responsive (adapté aux mobiles et tablettes).

### Partie Administration (Back-office)
*   **Système CRUD complet** (Create, Read, Update, Delete) sécurisé avec PDO.
*   Tableau de bord listant tous les articles.
*   Ajout de nouveaux plats avec gestion sécurisée de l'upload d'images (vérification de la taille, de l'extension, et gestion des doublons).
*   Modification et suppression d'articles existants.

## 🛠️ Technologies Utilisées

*   **Back-end :** PHP
*   **Base de données :** MySQL (requêtes préparées avec l'objet PDO)
*   **Front-end :** HTML5, CSS3, JavaScript
*   **Frameworks :** Bootstrap 3, jQuery

## 🚀 Installation & Lancement Local

Ce projet nécessite un environnement de serveur local comme **XAMPP**, **WAMP** ou **MAMP**.

### 1. Prérequis
Assurez-vous d'avoir téléchargé et installé [XAMPP](https://www.apachefriends.org/fr/index.html) (ou WAMP).

### 2. Copier les fichiers
Placez le dossier de ce projet à la racine de votre serveur local :
*   **Pour XAMPP :** Copiez le dossier dans `C:\xampp\htdocs\`.
*   **Pour WAMP :** Copiez le dossier dans `C:\wamp\www\`.

### 3. Configuration de la base de données
1. Lancez les modules **Apache** et **MySQL** depuis le panneau de contrôle XAMPP.
2. Ouvrez votre navigateur et allez sur `http://localhost/phpmyadmin/`.
3. Créez une nouvelle base de données.
4. *Important :* Importez votre fichier d'export SQL contenant les tables du menu (généralement `items` et `categories`).
5. Ouvrez le fichier `admin/database.php` et vérifiez que les identifiants de connexion correspondent à votre base de données locale (sur XAMPP, c'est généralement `root` en nom d'utilisateur et un mot de passe vide).

### 4. Lancement de l'application
Ouvrez votre navigateur web et accédez à l'URL suivante pour voir le site (ajustez le nom du dossier si nécessaire) :
```text
http://localhost/Resto/
```
Pour accéder au panel d'administration et gérer le menu :
```text
http://localhost/Resto/admin/
```

## 👨‍💻 À propos

Projet de portfolio démontrant de solides compétences en développement Full-Stack PHP.
