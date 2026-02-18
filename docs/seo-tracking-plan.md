# Plan de suivi SEO - manupotvin.be

Derniere mise a jour : 2026-02-18
Score estime apres phase 4 : ~80-85/100

## Historique des phases implementees

| Phase | Commit | Date | Score estime |
|-------|--------|------|-------------|
| Phase 1 | 58eb9f5 | - | ~45 -> ~55 |
| Phase 2 | 9dc846f | - | ~55 -> ~60 |
| Phase 3 | 575b7e3 | - | ~60 -> ~70 |
| Phase 4 | 3ce1556 | 2026-02-18 | ~70 -> ~80-85 |

---

## 1. Configuration des outils (a faire immediatement)

### Google Search Console
- [ ] Verifier que le site est enregistre : https://search.google.com/search-console
- [ ] Soumettre le sitemap : `https://www.manupotvin.be/sitemap.xml`
- [ ] Demander l'indexation manuelle des pages cles :
  - [ ] `/` (accueil)
  - [ ] `/products/portes-fenetres-chassis`
  - [ ] `/products/pergolas`
  - [ ] `/products/porte-de-garage`
  - [ ] `/products/moustiquaire`
  - [ ] `/a-propos`
  - [ ] `/blog`
- [ ] Verifier que le fichier `robots.txt` ne bloque rien d'important
- [ ] Verifier l'absence d'erreurs dans l'onglet "Experience de la page"

### Google Business Profile
- [ ] Verifier la fiche : horaires, photos, services, categorie
- [ ] Ajouter la zone d'intervention (Hannut, Waremme, Jodoigne, etc.)
- [ ] Ajouter des photos recentes de realisations (min. 10)
- [ ] Activer la messagerie
- [ ] Publier un premier "post" Google Business

### Bing Webmaster Tools
- [ ] Enregistrer le site : https://www.bing.com/webmasters
- [ ] Soumettre le sitemap

### Configuration serveur
- [ ] Appliquer la config Brotli (voir `docs/nginx-seo-config.md` section 6)
- [ ] Appliquer les headers de securite (voir `docs/nginx-seo-config.md` section 7)
- [ ] Appliquer le redirect non-www en un seul hop (section 2)
- [ ] Appliquer HSTS (section 3)
- [ ] Verifier avec : `curl -I https://www.manupotvin.be` que les headers sont presents

---

## 2. Mots-cles a suivre

### Mots-cles principaux (haute priorite)

| Mot-cle | Position initiale | Position S+4 | Position S+8 | Position S+12 |
|---------|-------------------|--------------|--------------|----------------|
| chassis hannut | | | | |
| chassis waremme | | | | |
| fenetre hannut | | | | |
| fenetre waremme | | | | |
| pergola hannut | | | | |
| pergola jodoigne | | | | |
| porte de garage hannut | | | | |
| menuiserie exterieure hannut | | | | |
| moustiquaire hannut | | | | |
| chassis jodoigne | | | | |

### Mots-cles secondaires (longue traine)

| Mot-cle | Position initiale | Position S+4 | Position S+8 | Position S+12 |
|---------|-------------------|--------------|--------------|----------------|
| remplacement chassis waremme | | | | |
| installation pergola bioclimatique hannut | | | | |
| porte garage sectionnelle hannut | | | | |
| chassis pvc jodoigne | | | | |
| chassis alu waremme | | | | |
| moustiquaire sur mesure hannut | | | | |

### Comment relever les positions
1. **Google Search Console** > Performances > Filtrer par requete
2. **Recherche manuelle** : ouvrir Google en navigation privee, taper le mot-cle, noter la position
3. **Outil gratuit** : whatsmyserp.com ou serprobot.com (position ponctuelle)

---

## 3. Metriques a suivre dans Google Search Console

Relever ces chiffres chaque mois dans l'onglet "Performances" :

| Metrique | Mois 0 (ref) | Mois 1 | Mois 2 | Mois 3 | Mois 4 | Mois 5 | Mois 6 |
|----------|-------------|--------|--------|--------|--------|--------|--------|
| Impressions totales | | | | | | | |
| Clics totaux | | | | | | | |
| CTR moyen | | | | | | | |
| Position moyenne | | | | | | | |
| Pages indexees | | | | | | | |
| Erreurs d'exploration | | | | | | | |

### Indicateurs cles
- **Impressions** : premier indicateur qui bouge (2-4 semaines). Si ca monte, le ranking suit.
- **CTR** : devrait etre > 3% en moyenne. Si bas, les meta titles/descriptions ne sont pas assez attractifs.
- **Position moyenne** : viser < 20 (page 1-2) sur les mots-cles principaux a 3 mois.

---

## 4. Calendrier d'actions post-deploiement

### Semaine 1 (immediatement)
- [ ] Configurer tous les outils (section 1 ci-dessus)
- [ ] Appliquer les configs nginx
- [ ] Relever les positions initiales de tous les mots-cles
- [ ] Screenshot de la Search Console comme reference (mois 0)
- [ ] Verifier l'indexation : taper `site:manupotvin.be` dans Google et compter les pages

### Semaines 2-4
- [ ] Commencer les citations externes (voir `docs/phase4-content-todo.md` section Action 38)
  - [ ] Google Business Profile (priorite 1)
  - [ ] Pages d'Or
  - [ ] Yelp Belgique
- [ ] Publier 2-3 articles de blog via Filament admin
  - Idees d'articles :
  - [ ] "Comment choisir entre chassis PVC et aluminium ?"
  - [ ] "5 signes qu'il est temps de remplacer vos fenetres"
  - [ ] "Pergola bioclimatique : guide complet pour la Belgique"
- [ ] Verifier dans Search Console que les nouvelles pages sont indexees
- [ ] Demander des avis Google a 3-5 clients satisfaits

### Mois 2
- [ ] Relever les positions (S+4 dans le tableau)
- [ ] Comparer impressions et clics avec le mois 0
- [ ] Publier 2 nouveaux articles de blog
- [ ] Continuer les citations (Houzz, Kompass, Europages)
- [ ] Enrichir les realisations (voir `docs/phase3-content-todo.md`)
- [ ] Ajouter des temoignages clients reels
- [ ] Evaluer la conversion WebP des images (voir `docs/phase3-content-todo.md`)

### Mois 3
- [ ] Relever les positions (S+8)
- [ ] Analyser quels mots-cles ont le plus progresse
- [ ] Identifier les mots-cles ou le site est en position 11-20 (potentiel page 1)
- [ ] Renforcer le contenu des pages qui stagnent
- [ ] Publier 2 nouveaux articles de blog
- [ ] Evaluer si PurgeCSS vaut le coup (voir `docs/phase4-content-todo.md`)

### Mois 4-6
- [ ] Relever les positions (S+12)
- [ ] Bilan complet : comparer mois 0 vs mois 6
- [ ] Decider si un nouvel audit SEO est necessaire
- [ ] Envisager des campagnes Google Ads ciblees sur les mots-cles ou le SEO organique est lent

---

## 5. Strategie de contenu blog

Le blog est le levier principal pour le SEO a moyen/long terme. Objectif : 2 articles/mois minimum.

### Themes porteurs pour le secteur

| Theme | Mot-cle cible | Type |
|-------|--------------|------|
| Chassis PVC vs aluminium : comment choisir ? | chassis pvc ou alu belgique | Guide comparatif |
| Quand remplacer ses fenetres ? 5 signes | remplacement fenetre belgique | Guide pratique |
| Pergola bioclimatique : avantages et prix | pergola bioclimatique prix belgique | Guide achat |
| Primes renovation fenetres en Wallonie | prime renovation fenetre wallonie | Informatif |
| Porte de garage : sectionnelle vs basculante | porte garage sectionnelle belgique | Guide comparatif |
| Isolation thermique : l'importance des chassis | isolation chassis belgique | Informatif |
| Moustiquaires : quel type pour quelle fenetre ? | moustiquaire fenetre type | Guide pratique |
| Entretien des chassis PVC : nos conseils | entretien chassis pvc | Guide pratique |

### Bonnes pratiques articles
- Minimum 800 mots par article
- Inclure le mot-cle dans le titre, le H1, le premier paragraphe et la meta description
- Ajouter 2-3 images pertinentes (avec alt text)
- Lier vers les pages produit concernees (maillage interne)
- Inclure un CTA vers la page contact ou un devis gratuit

---

## 6. Checklist de verification technique

A verifier periodiquement (tous les 2 mois) :

### Indexation
- [ ] `site:manupotvin.be` renvoie le bon nombre de pages
- [ ] Pas de pages en double dans l'index
- [ ] Le sitemap.xml est a jour (`php artisan sitemap:generate`)
- [ ] Pas d'erreurs 404 dans Search Console

### Performance
- [ ] Score PageSpeed Insights > 70 mobile (https://pagespeed.web.dev)
- [ ] Pas de CLS > 0.1 (layout shift)
- [ ] Temps de chargement < 3s sur mobile

### Schemas / donnees structurees
- [ ] Tester avec https://search.google.com/test/rich-results
- [ ] HomeAndConstructionBusiness present sur chaque page
- [ ] BreadcrumbList present sur les pages internes
- [ ] Article schema present sur les articles de blog

### Securite et headers
- [ ] HTTPS partout (pas de mixed content)
- [ ] HSTS header present
- [ ] Referrer-Policy et Permissions-Policy presents
- [ ] `curl -I https://www.manupotvin.be` pour verifier

---

## 7. Objectifs a 6 mois

| Objectif | Cible | Comment mesurer |
|----------|-------|----------------|
| Pages indexees | > 60 | `site:manupotvin.be` |
| Impressions mensuelles | > 2000 | Google Search Console |
| Clics mensuels | > 100 | Google Search Console |
| Position moyenne | < 25 | Google Search Console |
| Mots-cles page 1 | > 5 | Suivi positions |
| Articles de blog | > 10 | Filament admin |
| Avis Google | > 10 (4.5+ etoiles) | Google Business Profile |
| Citations/backlinks | > 8 annuaires | Verification manuelle |

---

## Fichiers de reference

- `docs/nginx-seo-config.md` : configs serveur a appliquer
- `docs/phase3-content-todo.md` : actions contenu (realisations, temoignages, images WebP)
- `docs/phase4-content-todo.md` : citations externes + PurgeCSS
- `public/sitemap.xml` : sitemap actuel
- `public/llms.txt` : fiche pour les LLMs/IA
