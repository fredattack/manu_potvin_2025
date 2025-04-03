<p align="center"><img src="public/images/logo.png" width="400" alt="Manu Potvin Logo"></p>

# Projet Manu Potvin 2025

## À propos du projet

Manu Potvin 2025 est un site web professionnel dédié à la vente, l'installation et l'entretien de châssis, fenêtres, portes et pergolas. Cette application web est développée avec Laravel (backend) et utilise des technologies modernes pour le frontend.

### Objectifs principaux
- Présenter les services et produits de l'entreprise
- Mettre en valeur les réalisations précédentes via un portfolio
- Permettre aux clients de contacter l'entreprise
- Gérer les témoignages clients
- Administrer facilement le contenu du site via un panneau d'administration

## Stack technologique

### Backend
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

### Frontend
- **Framework JS**: Vite pour la compilation des assets
- **Librairies JS**: Axios pour les requêtes HTTP
- **CSS**: Tailwind CSS (intégré via Filament)

## Installation en local

### Prérequis
- PHP 8.2 ou supérieur
- Composer
- Node.js et npm
- MySQL ou MariaDB
- Git

### Étapes d'installation

1. **Cloner le dépôt**
   ```bash
   git clone [URL_DU_REPO] manu_potvin_2025
   cd manu_potvin_2025
   ```

2. **Installer les dépendances PHP**
   ```bash
   composer install
   ```

3. **Installer les dépendances JavaScript**
   ```bash
   npm install
   ```

4. **Configurer l'environnement**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configurer la base de données**
   - Créer une base de données MySQL/MariaDB
   - Mettre à jour les informations de connexion dans le fichier `.env`:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=manu_potvin_2025
     DB_USERNAME=root
     DB_PASSWORD=
     ```

6. **Exécuter les migrations et les seeders**
   ```bash
   php artisan migrate --seed
   ```

7. **Créer le lien symbolique pour le stockage**
   ```bash
   php artisan storage:link
   ```

8. **Compiler les assets**
   ```bash
   npm run dev
   ```

9. **Lancer le serveur de développement**
   ```bash
   php artisan serve
   ```

10. **Accéder à l'application**
    - Frontend: [http://localhost:8000](http://localhost:8000)
    - Administration: [http://localhost:8000/admin](http://localhost:8000/admin)

### Utilisateur administrateur par défaut
- Email: admin@example.com
- Mot de passe: password

## Déploiement en production

### Prérequis serveur
- Serveur web (Apache ou Nginx)
- PHP 8.2+ avec extensions requises
- MySQL ou MariaDB
- Composer
- Node.js et npm (pour la compilation des assets)

### Configuration du serveur web

#### Apache
Assurez-vous que le module `mod_rewrite` est activé et que la directive `AllowOverride All` est configurée pour le répertoire du projet.

Exemple de configuration VirtualHost:
```apache
<VirtualHost *:80>
    ServerName manu-potvin.com
    ServerAlias www.manu-potvin.com
    DocumentRoot /var/www/manu_potvin_2025/public

    <Directory /var/www/manu_potvin_2025/public>
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/manu_potvin_error.log
    CustomLog ${APACHE_LOG_DIR}/manu_potvin_access.log combined
</VirtualHost>
```

#### Nginx
Exemple de configuration:
```nginx
server {
    listen 80;
    server_name manu-potvin.com www.manu-potvin.com;
    root /var/www/manu_potvin_2025/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

### Étapes de déploiement

1. **Cloner le dépôt sur le serveur**
   ```bash
   git clone [URL_DU_REPO] /var/www/manu_potvin_2025
   cd /var/www/manu_potvin_2025
   ```

2. **Installer les dépendances en mode production**
   ```bash
   composer install --no-dev --optimize-autoloader
   npm install
   ```

3. **Configurer l'environnement**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   
   Mettez à jour le fichier `.env` avec les paramètres de production:
   ```
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://manu-potvin.com
   
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=manu_potvin_production
   DB_USERNAME=db_user
   DB_PASSWORD=secure_password
   
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.sendinblue.com
   MAIL_PORT=587
   MAIL_USERNAME=your_sendinblue_username
   MAIL_PASSWORD=your_sendinblue_password
   MAIL_ENCRYPTION=tls
   MAIL_FROM_ADDRESS=contact@manu-potvin.com
   MAIL_FROM_NAME="Manu Potvin"
   ```

4. **Compiler les assets pour la production**
   ```bash
   npm run build
   ```

5. **Exécuter les migrations**
   ```bash
   php artisan migrate --force
   ```

6. **Créer le lien symbolique pour le stockage**
   ```bash
   php artisan storage:link
   ```

7. **Optimiser Laravel**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

8. **Configurer les permissions**
   ```bash
   chown -R www-data:www-data /var/www/manu_potvin_2025
   chmod -R 755 /var/www/manu_potvin_2025
   chmod -R 775 /var/www/manu_potvin_2025/storage
   chmod -R 775 /var/www/manu_potvin_2025/bootstrap/cache
   ```

9. **Configurer le HTTPS** (recommandé)
   Utilisez Let's Encrypt pour obtenir un certificat SSL gratuit:
   ```bash
   certbot --apache -d manu-potvin.com -d www.manu-potvin.com
   ```
   ou pour Nginx:
   ```bash
   certbot --nginx -d manu-potvin.com -d www.manu-potvin.com
   ```

10. **Configurer les tâches planifiées**
    Ajoutez la tâche cron suivante pour exécuter le planificateur Laravel:
    ```
    * * * * * cd /var/www/manu_potvin_2025 && php artisan schedule:run >> /dev/null 2>&1
    ```

## Maintenance

### Mise à jour de l'application
```bash
cd /var/www/manu_potvin_2025
git pull
composer install --no-dev --optimize-autoloader
npm install
npm run build
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Sauvegarde
Il est recommandé de configurer des sauvegardes régulières:
- Base de données: `mysqldump -u username -p database_name > backup.sql`
- Fichiers média: sauvegarde du répertoire `/storage/app/public`

## Structure du projet

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

## Fonctionnalités principales

- **Frontend**:
  - Page d'accueil avec bannière et sections dynamiques
  - Catalogue de réalisations filtrable par catégorie
  - Page de contact avec formulaire et carte
  - Témoignages clients
  - Présentation des partenaires

- **Backend (Administration)**:
  - Interface d'administration Filament
  - Gestion CRUD complète pour toutes les entités
  - Upload et gestion des médias
  - Tableau de bord personnalisé

## Licence

Ce projet est un logiciel propriétaire. Tous droits réservés.

## Contact

Pour toute question concernant le projet, veuillez contacter l'équipe de développement à [adresse-email@example.com].
