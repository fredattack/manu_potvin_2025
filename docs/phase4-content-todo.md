# Phase 4 - Actions manuelles a realiser

Actions qui ne peuvent pas etre implementees en code et necessitent une intervention manuelle.

## Action 38 : Citations externes (backlinks)

Creer des profils/fiches sur les annuaires suivants pour renforcer l'autorite du domaine :

### Priorite haute
- [ ] **Google Business Profile** : verifier que la fiche est complete (horaires, photos, services, zone d'intervention)
- [ ] **Pages d'Or (pagesdor.be)** : creer ou mettre a jour la fiche Manu Potvin
- [ ] **Yelp Belgique** : creer une fiche entreprise

### Priorite moyenne
- [ ] **Kompass.com** : inscription comme entreprise de menuiserie
- [ ] **Europages** : fiche gratuite dans la categorie construction
- [ ] **Houzz.fr** : profil professionnel avec photos de realisations
- [ ] **TrustPilot** : creer une page entreprise pour collecter des avis

### Priorite basse
- [ ] **Facebook** : verifier les infos de la page (adresse, horaires, site web)
- [ ] **Annuaire des artisans (Belgique)** : inscription
- [ ] **Wikidata** : creer une entite pour Manu Potvin (renforce Knowledge Graph)

### Bonnes pratiques NAP
Assurer la coherence NAP (Name, Address, Phone) sur toutes les plateformes :
- Nom : Manu Potvin
- Adresse : Hannut, 4280, Belgique
- Telephone : +32 495 24 65 42
- Site web : https://www.manupotvin.be

## Action 39 : Optimisation CSS (PurgeCSS)

Le fichier `style.css` (700 KB) est un template Finbiz charge en entier. Voici l'approche recommandee :

### Etape 1 : Audit
```bash
# Installer PurgeCSS
npm install -g purgecss

# Lancer un audit (sans ecraser le fichier)
purgecss --css public/assets/css/style.css \
         --content "resources/views/**/*.blade.php" \
         --output public/assets/css/style.purged.css
```

### Etape 2 : Comparaison
```bash
# Comparer les tailles
ls -lh public/assets/css/style.css
ls -lh public/assets/css/style.purged.css
```

### Etape 3 : Validation visuelle
Tester CHAQUE page du site avec le CSS purge :
- [ ] Accueil
- [ ] Portes-fenetres-chassis
- [ ] Chassis PVC / ALU
- [ ] Pergolas
- [ ] Porte de garage
- [ ] Moustiquaire
- [ ] Realisations
- [ ] A propos
- [ ] Contact
- [ ] Blog
- [ ] Pages de localisation (au moins 2)
- [ ] Version mobile de chaque page

### Etape 4 : Safelist
Si des styles sont supprimes a tort, ajouter les selecteurs a la safelist PurgeCSS :
```javascript
// purgecss.config.js
module.exports = {
  content: ['resources/views/**/*.blade.php'],
  css: ['public/assets/css/style.css'],
  safelist: [
    // Classes dynamiques ajoutees par JS
    /^swiper/,
    /^animate/,
    /^fa-/,
  ],
  output: 'public/assets/css/'
}
```

### Risques
- Le theme Finbiz utilise des classes CSS qui peuvent etre ajoutees dynamiquement par JS
- Certaines pages admin (Filament) partagent peut-etre des styles
- Les animations CSS (animate.css) ne sont pas detectees par PurgeCSS si declenchees par JS
