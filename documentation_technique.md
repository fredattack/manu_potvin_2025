# Documentation Technique et Fonctionnelle - Projet Manu Potvin 2025

## 1. Vue d'ensemble du projet

### 1.1 Description générale
Le projet "Manu Potvin 2025" est un site web professionnel dédié à la vente, l'installation et l'entretien de châssis, fenêtres, portes et pergolas. Il s'agit d'une application web développée avec Laravel (backend) et utilisant des technologies modernes pour le frontend.

### 1.2 Objectifs principaux
- Présenter les services et produits de l'entreprise
- Mettre en valeur les réalisations précédentes via un portfolio
- Permettre aux clients de contacter l'entreprise
- Gérer les témoignages clients
- Administrer facilement le contenu du site via un panneau d'administration

## 2. Architecture technique

### 2.1 Stack technologique

#### 2.1.1 Backend
- **Framework**: Laravel 11
- **PHP**: Version 8.2+
- **Base de données**: MySQL/MariaDB
- **Packages principaux**:
  - Filament (administration)
  - Spatie Media Library (gestion des médias)
  - Laravel Tinker (console interactive)
  - Arcanedev Log Viewer (visualisation des logs)
  - Spatie Laravel Sitemap (génération de sitemap)
  - SendinBlue API (envoi d'emails)

#### 2.1.2 Frontend
- **Framework JS**: Vite pour la compilation des assets
- **Librairies JS**: Axios pour les requêtes HTTP
- **CSS**: Tailwind CSS (intégré via Filament)

### 2.2 Structure du projet
Le projet suit l'architecture MVC (Modèle-Vue-Contrôleur) standard de Laravel avec quelques adaptations spécifiques:

```
manu_potvin_2025/
├── app/                      # Code source principal
│   ├── Http/                 # Contrôleurs et middlewares
│   │   ├── Controllers/      # Logique de contrôle
│   │   └── Middleware/       # Middlewares
│   ├── Models/               # Modèles de données
│   ├── Providers/            # Service providers
│   └── Scopes/               # Query scopes personnalisés
├── bootstrap/                # Fichiers d'initialisation
├── config/                   # Configuration
├── database/                 # Migrations et seeders
├── public/                   # Fichiers publics (assets, index.php)
├── resources/                # Ressources non compilées
│   ├── js/                   # JavaScript source
│   ├── css/                  # CSS source
│   └── views/                # Templates Blade
│       ├── components/       # Composants réutilisables
│       ├── Layouts/          # Layouts principaux
│       └── Pages/            # Pages spécifiques
├── routes/                   # Définition des routes
├── storage/                  # Stockage (logs, uploads, cache)
└── tests/                    # Tests automatisés
```

## 3. Modèles de données

### 3.1 Entités principales

#### 3.1.1 Realisation
Représente les projets réalisés par l'entreprise.
- **Attributs**:
  - id (PK)
  - title (titre du projet)
  - description (description détaillée)
  - category (catégorie, stockée sous forme de tableau)
  - published (statut de publication)
  - place (lieu de réalisation)
  - date (date de réalisation)
  - customer (client)
  - favorite (projet mis en avant)
  - ordre (ordre d'affichage)
  - created_at, updated_at, deleted_at (timestamps)
- **Relations**:
  - Media (via Spatie Media Library)
- **Collections de médias**:
  - illustration (image principale)
  - gallery (galerie d'images)

#### 3.1.2 Testimonial
Gère les témoignages clients.
- **Attributs principaux**:
  - id (PK)
  - name (nom du client)
  - content (contenu du témoignage)
  - rating (note attribuée)
  - published (statut de publication)

#### 3.1.3 Partner
Représente les partenaires commerciaux.
- **Attributs principaux**:
  - id (PK)
  - name (nom du partenaire)
  - description
  - url (site web)
  - logo (image)

#### 3.1.4 CustomerData
Stocke les informations générales sur l'entreprise.
- **Attributs principaux**:
  - contact_email
  - contact_phone
  - address
  - social_media_links
  - about_text

#### 3.1.5 Banner
Gère les bannières du site.
- **Attributs principaux**:
  - title
  - subtitle
  - button_text
  - button_link
  - image

### 3.2 Gestion des médias
Le projet utilise Spatie Media Library pour gérer les médias (images, documents). Cette bibliothèque permet:
- Le stockage organisé des fichiers
- La génération de versions redimensionnées (thumbnails)
- La gestion des collections de médias par entité
- Le support des images responsives

## 4. Fonctionnalités principales

### 4.1 Frontend

#### 4.1.1 Page d'accueil
- Bannière principale avec appel à l'action
- Section "À propos" présentant l'entreprise
- Témoignages clients
- Partenaires commerciaux
- Projets mis en avant
- Formulaire de contact rapide

#### 4.1.2 Catalogue de réalisations
- Affichage des projets par catégorie
- Filtrage par type de projet
- Vue détaillée de chaque réalisation avec galerie d'images

#### 4.1.3 Page de contact
- Formulaire de contact complet
- Inscription à la newsletter
- Coordonnées de l'entreprise
- Carte de localisation

### 4.2 Backend (Administration)

#### 4.2.1 Panneau d'administration Filament
- Interface moderne et intuitive
- Gestion CRUD complète pour toutes les entités
- Tableau de bord personnalisé
- Gestion des utilisateurs et des rôles
- Upload et gestion des médias
- Prévisualisation des modifications

## 5. Routage et contrôleurs

### 5.1 Routes principales
- `/` - Page d'accueil (HomeController)
- `/contact` - Page de contact (ContactController)
- `/products/{type}` - Affichage des produits par type (PageController)
- `/products/{type}/kind/{subType?}` - Filtrage des produits par sous-type (PageController)
- `/realisation/{realisation}/detail` - Détail d'une réalisation (RealisationController)

### 5.2 Contrôleurs principaux

#### 5.2.1 HomeController
Gère l'affichage de la page d'accueil avec:
- Récupération des réalisations favorites
- Regroupement des réalisations par catégorie de service
- Chargement des données client (CustomerData)

#### 5.2.2 ContactController
Gère:
- L'affichage du formulaire de contact
- Le traitement des soumissions de formulaire
- L'inscription à la newsletter

#### 5.2.3 PageController
Contrôleur générique pour le rendu des pages de produits avec:
- Filtrage par type et sous-type
- Rendu conditionnel selon les paramètres

#### 5.2.4 RealisationController
Gère l'affichage détaillé des réalisations.

## 6. Vues et composants

### 6.1 Structure des vues
Le projet utilise le moteur de template Blade de Laravel avec:
- Layouts réutilisables (app.blade.php)
- Composants modulaires pour les sections répétitives
- Vues partielles pour les éléments spécifiques

### 6.2 Composants principaux
- Header et navigation
- Footer
- Bannières
- Cartes de réalisation
- Témoignages
- Formulaires de contact
- Galeries d'images

## 7. Sécurité

### 7.1 Authentification et autorisation
- Système d'authentification Laravel standard
- Middleware de protection des routes d'administration
- Validation CSRF sur tous les formulaires

### 7.2 Validation des données
- Validation côté serveur pour toutes les entrées utilisateur
- Échappement automatique des données dans les vues Blade
- Protection contre les injections SQL via l'ORM Eloquent

## 8. Performance et optimisation

### 8.1 Mise en cache
- Cache de configuration
- Cache de routes
- Cache de vues

### 8.2 Optimisation des médias
- Génération automatique d'images optimisées
- Chargement différé des images (lazy loading)
- Support des images responsives

## 9. Tests

### 9.1 Tests unitaires
Tests PHPUnit pour les fonctionnalités critiques:
- Modèles et relations
- Services métier
- Helpers et utilitaires

### 9.2 Tests fonctionnels
Tests d'intégration pour:
- Contrôleurs et routes
- Formulaires et validations
- Flux utilisateur complets

## 10. Déploiement et environnements

### 10.1 Environnements
- Développement local
- Staging (pré-production)
- Production

### 10.2 Processus de déploiement
- Gestion des dépendances via Composer et NPM
- Compilation des assets avec Vite
- Migrations de base de données automatisées
- Configuration spécifique à l'environnement via .env

## 11. Maintenance et évolution

### 11.1 Logs et monitoring
- Journalisation détaillée des erreurs
- Visualisation des logs via Arcanedev Log Viewer
- Notifications d'erreurs critiques

### 11.2 Sauvegardes
- Sauvegarde quotidienne de la base de données
- Sauvegarde des médias uploadés
- Rétention des sauvegardes sur 30 jours

### 11.3 Mises à jour
- Mise à jour régulière des dépendances
- Correctifs de sécurité prioritaires
- Évolutions fonctionnelles planifiées

## 12. Intégrations externes

### 12.1 SendinBlue
Utilisé pour:
- Envoi d'emails transactionnels
- Gestion des campagnes newsletter
- Suivi des interactions email

### 12.2 Sitemap
Génération automatique de sitemap XML pour l'indexation par les moteurs de recherche.

## 13. Conclusion

Le projet "Manu Potvin 2025" est une application web moderne et robuste, construite sur des technologies éprouvées et suivant les meilleures pratiques de développement. Son architecture modulaire facilite la maintenance et les évolutions futures, tandis que son interface d'administration permet une gestion aisée du contenu par les équipes non techniques.

Cette documentation technique fournit une vue d'ensemble des aspects techniques et fonctionnels du projet, servant de référence pour les développeurs et administrateurs système impliqués dans sa maintenance et son évolution.
