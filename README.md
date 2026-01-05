<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>




# 🛒 CRUD Produits — Laravel 10

Application simple en Laravel permettant de gérer des produits :

## ➕ Ajouter un produit

## 📄 Lister les produits

## ✏️ Modifier un produit

## ❌ Supprimer un produit

## 👁️ Voir le détail d’un produit

Projet idéal pour l’apprentissage (routes, contrôleurs, vues, migrations, seeders).

# 🚀 1️⃣ Prérequis

Assure-toi d’avoir installé :

PHP ≥ 8.1

Composer

MySQL / MariaDB

# 📥 2️⃣ Installation
   git clone https://github.com/elghoulkhadija/laravel_CRUD.git
                cd laravel_CRUD
   composer install



 # 🗄️ 4️⃣ Base de données

### Dans le fichier .env, configure :

        DB_DATABASE=...
        DB_USERNAME=root
        DB_PASSWORD=


## Crée les tables ou Exécuter de la migration :

        php artisan migrate


## Remplir la base avec des données (optionnel) :

        php artisan db:seed


        ou :
        
        php artisan migrate:fresh --seed

# 📚 5️⃣ Modèle — Produits

## Champs principaux :

### nom_p

### description_p

### prix_p

### quantite

# 🌐 6️⃣ Routes principales


<img width="464" height="229" alt="image" src="https://github.com/user-attachments/assets/bbff096c-863b-4e19-8a03-5aaf7ea20ee2" />

    

# 🎨 7️⃣ Interface utilisateur

## Utilise :

### Tailwind CSS (CDN)

### Blade Templates

# ▶️ 8️⃣ Lancer le projet

     php artisan serve


## Puis ouvrir :

 👉 http://127.0.0.1:8000

# 🧩 Structure du projet

        app/
         └── Http/Controllers/ProduitController.php
        database/
         ├── migrations/
         ├── factories/
         |    ProduitFactory.php
         └── seeders/
             └── ProduitSeeder.php
        
        resources/
         └── views/
             ├── index.blade.php
             ├── Ajouter.blade.php
             ├── edit.blade.php
             └── detail.blade.php

# 🎯 Objectifs pédagogiques

    Comprendre le pattern MVC
    
    Créer un CRUD complet
    
    Utiliser migrations,controller ,view ,Model , seeders et factories

    Manipuler Blade + Tailwind









.
