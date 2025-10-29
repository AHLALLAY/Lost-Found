# 🔍 Lost&Found

**👤 Assigné :** Houssni Ouchad  
**📅 Créé :** 15/02/25

---

Développement d'une plateforme web permettant aux utilisateurs de publier et retrouver des objets perdus ou trouvés en utilisant le framework Laravel.

## 🛠️ Technologies Visée

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-316192?style=for-the-badge&logo=postgresql&logoColor=white)
![UML](https://img.shields.io/badge/UML-Diagramming-FF6B6B?style=for-the-badge&logo=diagrams.net&logoColor=white)

---

## 📋 Contexte du projet

La plateforme Lost&Found permet aux utilisateurs de publier et de consulter des annonces pour des objets perdus ou trouvés. Elle offre un espace simple et sécurisé où chacun peut retrouver ou rendre des objets importants grâce à une interface intuitive et pratique.

---

## ⭐ Fonctionnalités principales

### 📦 Publication d'Objets Perdus/Trouvés

Les utilisateurs peuvent publier des annonces pour des objets perdus ou trouvés.

**📝 Chaque annonce doit inclure :**
- 📌 Un titre
- 📄 Une description détaillée de l'objet
- 📸 Une photo (facultative)
- 📅 La date et le lieu de la perte ou de la trouvaille
- 📞 Informations de contact (Email, Téléphone)

**🔍 Fonctionnalités de recherche :**
- 🏷️ Les annonces doivent pouvoir être filtrées par catégorie d'objet (ex. : vêtements, appareils électroniques, clés, etc.)
- 🔎 Un champ de recherche permet aux utilisateurs de rechercher des objets par mots-clés, catégorie d'objet, ou lieu

### 💬 Commentaires
Les utilisateurs peuvent commenter les publications pour interagir avec la communauté.

### 📊 Statistiques
Affichage du nombre total de publications et des annonces les plus populaires.

---

## 🎁 Fonctionnalités Bonus

### 🔐 Authentification & Profils
Chaque utilisateur dispose d'un profil pour gérer ses publications (Authentification avec Breeze ou Jetstream).

### 📝 Bouton "Trouvé"
Permet à un utilisateur de signaler qu'il a retrouvé un objet perdu en cliquant sur l'annonce correspondante.

### 🔍 Bouton "C'est à moi"
Permet à un utilisateur de revendiquer un objet trouvé en cliquant sur l'annonce pour indiquer que l'objet lui appartient.

---

## 🏗️ Stack technique

- **🚀 Framework :** Laravel
- **🎨 Frontend :** HTML, CSS, JavaScript
- **📄 Template Engine :** Blade
- **🗄️ Base de données :** PostgreSQL

---

## 🚀 Installation et Utilisation

### 📋 Prérequis

Avant de commencer, assurez-vous d'avoir installé :
- **🐘 PHP** >= 8.1
- **📦 Composer** (gestionnaire de dépendances PHP)
- **🐘 PostgreSQL** >= 13
- **🟢 Node.js** et **📦 npm** (pour les assets frontend)
- **🔧 Git**

### ⚙️ Installation

1. **📥 Clonez le repository** :
   ```bash
   git clone https://github.com/AHLALLAY/Lost-Found.git
   cd Lost-Found
   ```

2. **📦 Installez les dépendances PHP** :
   ```bash
   composer install
   ```

3. **📦 Installez les dépendances Node.js** :
   ```bash
   npm install
   ```

4. **⚙️ Configurez l'environnement** :
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **🗄️ Configurez la base de données** dans le fichier `.env` :
   ```env
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=votre_database
   DB_USERNAME=votre_username
   DB_PASSWORD=votre_password
   ```

6. **🗃️ Exécutez les migrations** :
   ```bash
   php artisan migrate
   ```

7. **🎨 Compilez les assets** :
   ```bash
   npm run dev
   ```

8. **🚀 Lancez le serveur** :
   ```bash
   php artisan serve
   ```

### 🌐 Accès à l'application

Une fois le serveur démarré, accédez à l'application via :
- **🏠 URL locale :** http://localhost:8000
- **🌐 URL réseau :** http://127.0.0.1:8000

### 📱 Utilisation de la plateforme

#### 🔍 **Rechercher des objets**
1. 🔎 Utilisez la barre de recherche pour trouver des objets par mots-clés
2. 🏷️ Filtrez par catégorie d'objet
3. 📍 Recherchez par lieu de perte/trouvaille

#### 📦 **Publier une annonce**
1. ➕ Cliquez sur "Publier une annonce"
2. 📝 Remplissez le formulaire avec :
   - 📌 Titre de l'annonce
   - 📄 Description détaillée
   - 📸 Photo (optionnelle)
   - 📅 Date et lieu
   - 📞 Informations de contact
3. 🎯 Sélectionnez le type : "Perdu" ou "Trouvé"
4. ✅ Publiez votre annonce

#### 💬 **Interagir avec la communauté**
- 💭 Commentez les publications
- ✅ Utilisez le bouton "Trouvé" pour signaler qu'un objet perdu a été retrouvé
- 👤 Utilisez le bouton "C'est à moi" pour revendiquer un objet trouvé

#### 📊 **Consulter les statistiques**
- 📈 Visualisez le nombre total de publications
- 🔥 Découvrez les annonces les plus populaires
- 📊 Suivez l'activité de la plateforme

### 🔧 **Commandes utiles**

```bash
# 🧹 Nettoyer le cache
php artisan cache:clear

# 🎨 Régénérer les assets
npm run build

# 🧪 Exécuter les tests
php artisan test

# 👑 Créer un utilisateur admin
php artisan make:command CreateAdminUser
```

### 🐛 **Dépannage**

**🗄️ Problème de base de données :**
```bash
php artisan migrate:fresh
php artisan db:seed
```

**🔒 Problème de permissions :**
```bash
chmod -R 755 storage bootstrap/cache
```

**🧹 Problème de cache :**
```bash
php artisan config:clear
php artisan view:clear
php artisan route:clear
```

---

## 🎯 Compétences visées

| Compétence | Description | Niveau |
|------------|-------------|---------|
| **C1** | Définir le périmètre d'un problème rencontré en adoptant une démarche inductive | niveau 3, transposer |
| **C2** | Rechercher de façon méthodique une ou des solutions au problème rencontré | niveau 3, transposer |
| **C3** | Installer et configurer son environnement de travail | niveau 3, transposer |
| **C4** | Mettre en place une base de données relationnelle | niveau 2, adapter |
| **C5** | Développer des composants d'accès aux données | niveau 3, transposer |
| **C6** | Développer des composants métier | niveau 3, transposer |

---

## 📚 Modalités pédagogiques

- **⏰ Durée :** Vous disposez de 5 jours en autonomie pour réaliser le brief en utilisant les technologies appropriées
- **📅 Date d'assignement :** 17/02/2025 à 09:00
- **⏰ Date limite de soumission :** 21/02/2025 avant 23:59
- **🤝 Collaboration :** Aidez-vous les uns les autres

---

## 📊 Modalités d'évaluation

**🎤 Présentation de 15 minutes :**
- **⏱️ 5 minutes :** Démonstration de livrable
- **💻 5 minutes :** Explication partie code
- **❓ 5 minutes :** Évaluation des savoirs (Q/A)

> **⚠️ Important :** Toute non-conformité au cahier des charges ou tout retard dans la livraison sur Simplonline entraînera automatiquement l'invalidité de toutes les compétences liées au Brief.

---

## 📦 Livrables

**🔗 Lien vers le repository GitHub contenant :**
- 💻 Le code source du site web avec tous les fichiers nécessaires
- 📊 Diagrammes UML
- 📄 README

---

## ⚡ Critères de performance

### 📝 Documentation du code
- 💬 Utilisez des commentaires pour documenter votre code et expliquer les choix de conception que vous avez faits
- 🏷️ Utilisez des noms de classes et de variables explicites et significatifs pour rendre votre code plus lisible et plus facile à comprendre pour d'autres développeurs
- 📚 Documentez soigneusement le code pour une maintenance facile et une collaboration aisée avec d'autres développeurs

### ⚡ Optimisation des performances
- 🚀 Optimisez les performances du site en utilisant des techniques telles que l'utilisation de cache, la compression de données et la minimisation des requêtes à la base de données

### 🌐 Standards web
- 🌍 Respectez les standards du web en développant le site pour être compatible avec les navigateurs modernes et en suivant les meilleures pratiques en matière d'accessibilité web

### 💾 Sauvegarde
- 🔄 Assurez-vous de sauvegarder régulièrement le code et les données du site pour éviter les pertes en cas de problème technique

---

## 🤝 Contribution

Nous encourageons les contributions à ce projet ! Voici comment vous pouvez participer :

### 📋 Comment contribuer

1. **🍴 Fork** le projet sur GitHub
2. **📥 Clone** votre fork localement :
   ```bash
   git clone https://github.com/AHLALLAY/Lost-Found.git
   ```
3. **🌿 Créez** une branche pour votre fonctionnalité :
   ```bash
   git checkout -b feature/nouvelle-fonctionnalite
   ```
4. **💾 Commitez** vos modifications :
   ```bash
   git commit -m "Ajout: description de votre modification"
   ```
5. **📤 Pushez** vers votre branche :
   ```bash
   git push origin feature/nouvelle-fonctionnalite
   ```
6. **🔄 Ouvrez** une Pull Request sur GitHub

### 📝 Guidelines de contribution

- **✨ Code propre** : Respectez les conventions de codage Laravel
- **🧪 Tests** : Ajoutez des tests pour les nouvelles fonctionnalités
- **📚 Documentation** : Documentez votre code avec des commentaires clairs
- **💬 Messages de commit** : Utilisez des messages descriptifs en français
- **📋 Pull Request** : Décrivez clairement les modifications apportées

### 🐛 Signaler un bug

Si vous trouvez un bug, veuillez :
1. 🔍 Vérifier qu'il n'existe pas déjà dans les issues
2. ➕ Créer une nouvelle issue avec :
   - 📝 Description détaillée du problème
   - 🔄 Étapes pour reproduire le bug
   - 💻 Environnement utilisé (OS, navigateur, version PHP/Laravel)

### 💡 Proposer une fonctionnalité

Pour proposer une nouvelle fonctionnalité :
1. ➕ Créez une issue avec le label "enhancement"
2. 📝 Décrivez la fonctionnalité souhaitée
3. 🤔 Expliquez pourquoi elle serait utile
4. ⏳ Attendez la validation avant de commencer le développement

---

> **⚠️ Important :** Toute non-conformité au cahier des charges ou tout retard dans la livraison sur Simplonline entraînera automatiquement l'invalidité de toutes les compétences liées au Brief.