# Phase 3 - Actions contenu client

Ces actions necessitent du contenu fourni par le client (photos, temoignages, images).

## Action 26 : Enrichir les pages de realisations

Chaque realisation devrait contenir :
- 4 a 6 photos haute qualite (avant/apres si possible)
- Minimum 200 mots de description detaillee
- Localisation du chantier
- Type de produit installe
- Temoignage du client (optionnel)

Pages concernees : toutes les realisations dans la table `realisations`

## Action 27 : Ajouter des temoignages clients

Le modele `App\Models\Testimonial` existe deja dans l'application.

Ajouter 5 a 10 temoignages reels dans la table `testimonials` :
- Nom et prenom du client
- Localite (Hannut, Waremme, Jodoigne, etc.)
- Type de service (chassis, pergola, porte de garage, moustiquaire)
- Texte du temoignage (minimum 50 mots)
- Note sur 5 (optionnel)
- Photo du client (optionnel, avec consentement)

Les temoignages sont deja affiches via le composant `components.home.testimonials`.

## Action 29 : Conversion images WebP + attributs width/height

### Conversion WebP

Convertir les images JPEG/PNG principales en WebP pour reduire le poids :

```bash
# Installer cwebp (si pas deja installe)
brew install webp

# Convertir toutes les images du dossier custom
find public/assets/images/custom -name "*.jpg" -o -name "*.jpeg" | while read f; do
    cwebp -q 80 "$f" -o "${f%.*}.webp"
done

find public/assets/images/custom -name "*.png" | while read f; do
    cwebp -q 80 "$f" -o "${f%.*}.webp"
done
```

Apres conversion, utiliser la balise `<picture>` dans les templates Blade :

```html
<picture>
    <source srcset="{{ asset('assets/images/custom/default/home/new_main_home-2.webp') }}" type="image/webp">
    <img src="{{ asset('assets/images/custom/default/home/new_main_home-2.jpg') }}" alt="Description">
</picture>
```

### Attributs width/height

Ajouter les attributs `width` et `height` sur toutes les balises `<img>` pour eviter le layout shift (CLS) :

```html
<img src="image.jpg" alt="Description" width="800" height="600" loading="lazy">
```

Images prioritaires a traiter :
- `assets/images/custom/default/home/new_main_home-2.jpg` (hero homepage)
- `assets/images/custom/default/pergolas/pergolas_main2.jpg` (hero pergolas)
- `assets/images/custom/default/portes-de-garage/porte_garage_main.jpeg` (hero garage)
- `assets/images/custom/default/moustiquaire/moustiquaire_main.jpeg` (hero moustiquaire)
- `assets/images/custom/default/chassis/fenetre_alu_first-.jpg` (chassis principal)
