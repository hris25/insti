# Site Web Institutionnel

Ce projet est un site web institutionnel développé avec Laravel, conçu pour présenter un établissement d'enseignement, ses formations et sa vie étudiante.

## 📚 Présentation du Projet

Ce site web institutionnel est conçu pour présenter un établissement d'enseignement, ses formations, sa vie étudiante, ses actualités et ses partenaires. Le projet est développé en utilisant le framework Laravel pour le backend, Tailwind CSS pour le styling, et Vite comme outil de build.

## 🛠️ Technologies Utilisées

- **Backend:** Laravel 10.x
- **Frontend:** Tailwind CSS, Vite
- **Base de données:** MySQL
- **Langage:** PHP 8.1+

## 📁 Structure du Projet

```
insti-website/
├── app/
│   ├── Http/
│   │   └── Controllers/  # Contrôleurs de l'application
│   └── Models/           # Modèles Eloquent
├── config/               # Fichiers de configuration
├── database/
│   ├── migrations/       # Migrations de la base de données
│   └── seeders/          # Seeders pour les données de test
├── public/               # Assets publics
├── resources/
│   ├── css/              # Fichiers CSS/Tailwind
│   ├── js/               # Scripts JavaScript
│   └── views/            # Templates Blade
└── routes/
    └── web.php           # Définition des routes web
```

## 🗄️ Structure de la Base de Données

### Tables

- **formations**
  - `id` - Identifiant unique
  - `title` - Titre de la formation
  - `category` - Catégorie (ex: Licence, Master)
  - `diploma` - Diplôme obtenu
  - `description` - Description détaillée
  - `duration` - Durée de la formation
  - `requirements` - Prérequis
  - `career_opportunities` - Débouchés professionnels
  - `image` - Image associée (optionnel)

- **clubs**
  - Informations sur les associations étudiantes

- **actualites**
  - Actualités de l'établissement

- **partenaires**
  - Partenaires de l'institution

- **users**
  - Gestion des utilisateurs

- **cache**
  - Cache système

- **jobs**
  - Files d'attente des tâches

## 🔄 Flux de Données des Formations

### Récupération des Formations

1. **Contrôleur `FormationController`**
   - **Méthode `index()`**
     - Récupère toutes les formations avec `Formation::all()`
     - Transmet les données à la vue `formations.index`
   - **Méthode `show($id)`**
     - Récupère une formation spécifique avec `Formation::findOrFail($id)`
     - Transmet les données à la vue `formations.show`

2. **Modèle `Formation`**
   - Définit les champs modifiables avec `$fillable`
   - Correspond à la table `formations`

## 📖 Structure des Vues

### Dossier `layouts`
- **app.blade.php**
  - Template principal avec structure commune (header, main, footer)
  - Utilise `@yield()` pour les sections dynamiques

### Dossier `components`
- **header.blade.php**
  - Barre de navigation principale
- **footer.blade.php**
  - Pied de page commun à toutes les pages

### Dossier `pages`
- **home.blade.php**
  - Page d'accueil
- **formations.blade.php**
  - Liste des formations
- **vie-estudiantine.blade.php**
  - Vie étudiante
- **actualites.blade.php**
  - Actualités

## 🛠️ Installation

1. **Cloner le dépôt**
   ```bash
   git clone [url-du-repo]
   ```
2. **Installer les dépendances**
   ```bash
   composer install
   npm install
   ```
3. **Configurer l'environnement**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   - Configurer la base de données dans `.env`
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database
     DB_USERNAME=your_username
     DB_PASSWORD=your_password
     ```
4. **Migrer la base de données**
   ```bash
   php artisan migrate
   ```
5. **Lancer les seeders (optionnel)**
   ```bash
   php artisan db:seed
   ```
6. **Compiler les assets**
   ```bash
   npm run dev
   ```

## 📱 Fonctionnalités Principales

1. **Gestion des Formations**
   - Liste des formations disponibles
   - Détails de chaque formation
   - Filtrage par catégorie
   - Recherche de formations

2. **Vie Estudiantine**
   - Présentation des clubs et associations
   - Événements étudiants
   - Galerie photos

3. **Actualités**
   - Dernières nouvelles de l'établissement
   - Événements à venir
   - Communications importantes

4. **Section Contact**
   - Formulaire de contact
   - Informations de localisation
   - Réseaux sociaux

## 🔐 Sécurité

- Protection CSRF sur tous les formulaires
- Validation des données côté serveur
- Échappement automatique des données dans les vues Blade
- Authentification pour le panel d'administration

## 🤝 Contribution

1. Forker le projet
2. Créer une branche ( `git checkout -b feature/AmazingFeature` )
3. Committer les changements ( `git commit -m 'Add some AmazingFeature'` )
4. Pusher vers la branche ( `git push origin feature/AmazingFeature` )
5. Ouvrir une Pull Request

## 📝 License

Ce projet est sous licence MIT. Voir le fichier `LICENSE` pour plus de détails.

## 📖 Documentation Supplémentaire

- **Routes**
  - Définies dans `routes/web.php`
  - Routes principales : `/`, `/formations`, `/vie-estudiantine`, `/acces-rapide`, `/observatoire`, `/contact`

- **Contrôleurs**
  - `FormationController`, `HomeController`, `VieEstudiantineController`, `ActualiteController`

- **Configuration**
  - Fichier `.env.example` pour la configuration de l'environnement

## 🖼️ Captures d'Écran

- Ajouter des captures d'écran de l'interface utilisateur pour illustrer les principales pages du site.

## 📚 Documentation API

- Créer une documentation API si le projet expose des endpoints.

## 📝 Exemples de Code

- Ajouter des exemples de code pour les fonctionnalités principales, par exemple :

  ```php
  // Dans FormationController
  public function index()
  {
      $formations = Formation::all();
      return view('formations.index', compact('formations'));
  }
  ```

---

Ce README fournit une vue d'ensemble complète du projet, de la structure du code à la manière de contribuer. Il est conçu pour faciliter la compréhension et la maintenance du projet par les contributeurs.