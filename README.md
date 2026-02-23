# 🎓 CRUD Laravel 10 - Gestion des Étudiants

Application web développée avec **Laravel 10** permettant la gestion complète des étudiants avec upload et mise à jour de photo d'identité.

---

## 🚀 Fonctionnalités

- ✅ Ajouter un étudiant
- ✅ Modifier un étudiant
- ✅ Supprimer un étudiant
- ✅ Afficher la liste des étudiants
- ✅ Upload et mise à jour de photo d'identité
- ✅ Validation des données
- ✅ Messages de succès et d’erreurs
- ✅ Interface avec Bootstrap 5

---

## 🛠️ Technologies utilisées

- PHP 8.3
- Laravel 10
- MySQL
- Bootstrap 5
- Git & GitHub

---

## 📂 Installation du projet

### 1️⃣ Cloner le projet

```bash
git clone https://github.com/MIKINHOUESSE/crud-laravel-10.git

## 📂 Installation du projet

### 2️⃣ Entrer dans le dossier

```bash
cd crud-laravel-10
3️⃣ Installer les dépendances
composer install
4️⃣ Copier le fichier .env
cp .env.example .env
5️⃣ Configurer la base de données

Dans le fichier .env, modifier :

DB_DATABASE=nom_de_ta_base
DB_USERNAME=root
DB_PASSWORD=
6️⃣ Générer la clé d’application
php artisan key:generate
7️⃣ Lancer les migrations
php artisan migrate
8️⃣ Lancer le serveur
php artisan serve
📸 Gestion des photos

Les photos sont uploadées via formulaire

Stockage dans storage/app/public

Lien symbolique créé avec :

php artisan storage:link
📌 Structure du projet

app/Models/Student.php → Modèle étudiant

app/Http/Controllers/EtudiantController.php → Logique CRUD

resources/views/ → Vues Blade

database/migrations/ → Structure de la base de données

🎯 Objectif pédagogique

Ce projet m’a permis de pratiquer :

Le CRUD complet en Laravel

La gestion des fichiers (upload)

Les migrations

La validation des formulaires

Le versionnement avec Git

Le déploiement sur GitHub

👩‍💻 Auteur

MIKINHOUESSE

Projet réalisé dans le cadre d’apprentissage et de perfectionnement en développement web avec Laravel.
