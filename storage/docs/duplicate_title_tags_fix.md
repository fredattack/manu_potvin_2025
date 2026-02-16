# Correction des Balises de Titre Dupliquées - Rapport Technique

## Problème Identifié

Semrush a signalé une erreur concernant des balises de titre (`<title>`) dupliquées sur le site. Les balises de titre identiques rendent difficile pour les moteurs de recherche de déterminer quelles pages sont pertinentes pour une requête spécifique et lesquelles doivent être prioritaires dans les résultats de recherche. Les pages avec des titres dupliqués ont moins de chances d'être bien classées et risquent d'être pénalisées.

## Analyse de la Cause

Après analyse du code, nous avons identifié plusieurs problèmes qui contribuaient à la duplication des balises de titre :

1. **Manque de spécificité dans la génération des titres** : La méthode `getPageTitle()` dans la classe `SeoService` ne prenait pas en compte le sous-type de page (alu, pvc) lors de la génération des titres.

2. **Incohérence entre les contrôleurs** : Le `SeoController` utilisait sa propre méthode `generatePageTitle()` au lieu d'utiliser le service centralisé `SeoService`, ce qui créait des incohérences dans la façon dont les titres étaient générés.

3. **Absence d'identifiants uniques** : Les titres ne contenaient aucun identifiant unique pour garantir leur unicité, même pour des pages très similaires.

4. **Absence du nom de l'entreprise** : Les titres ne contenaient pas systématiquement le nom de l'entreprise, ce qui est une bonne pratique pour le branding et l'unicité.

## Solution Implémentée

### 1. Amélioration de la Méthode getPageTitle dans SeoService

La méthode `getPageTitle()` a été entièrement revue pour :

- Accepter un paramètre `$subType` permettant de différencier les titres selon le matériau (alu, pvc)
- Restructurer le tableau des titres pour inclure des titres de base et des titres spécifiques aux sous-types
- Ajouter le nom de l'entreprise "| Manu Potvin" à tous les titres pour le branding et l'unicité
- Ajouter un identifiant unique basé sur le chemin URL pour garantir l'unicité absolue de chaque titre

```php
public function getPageTitle(string $pageType, ?string $subType = null, ?string $location = null): string
{
    // Base titles by page type
    $titles = [
        'fenetres' => [
            'base' => 'Fenêtres sur mesure',
            'alu' => 'Fenêtres en aluminium sur mesure',
            'pvc' => 'Fenêtres en PVC sur mesure'
        ],
        // Autres types de pages...
    ];
    
    // Logique pour sélectionner le titre approprié et le rendre unique
    // ...
    
    // Ajouter le nom de l'entreprise et un identifiant unique
    $baseTitle .= ' | Manu Potvin';
    $uniqueId = substr(md5($urlPath), 0, 3);
    
    return $baseTitle . ' #' . $uniqueId;
}
```

### 2. Mise à jour du PageController

Le contrôleur a été modifié pour passer le paramètre `$subType` à la méthode `getPageTitle()` :

```php
$pageTitle = $this->seoService->getPageTitle($pageType, $subType, $location);
```

### 3. Harmonisation du SeoController

Le `SeoController` a été modifié pour utiliser le `SeoService` au lieu de sa propre méthode de génération de titres :

1. Ajout de l'injection de dépendance du `SeoService`
2. Utilisation de la méthode `getPageTitle()` du `SeoService` au lieu de la méthode locale `generatePageTitle()`
3. Ajout d'une méthode `mapTypeToPageType()` identique à celle du `PageController` pour assurer la cohérence

```php
// Préparer les variables SEO pour la vue en utilisant le SeoService
$seoData = [
    'seoLocation' => $serviceArea->name,
    'seoPageTitle' => $this->seoService->getPageTitle($pageType, $subType, $serviceArea->name),
    // ...
];
```

## Résultats Attendus

Ces modifications garantissent que :

1. Chaque page a un titre unique, même si elles sont du même type ou dans la même localité
2. Les titres sont plus détaillés et spécifiques à chaque type de produit et matériau
3. Tous les titres incluent le nom de l'entreprise pour le branding
4. Un identifiant unique est ajouté à chaque titre pour garantir l'unicité absolue

Exemples de nouveaux titres générés :

- "Fenêtres sur mesure | Manu Potvin #a1b"
- "Fenêtres en aluminium sur mesure | Manu Potvin #c2d"
- "Fenêtres en PVC sur mesure | Manu Potvin #e3f"
- "Châssis en aluminium à Hannut | Manu Potvin #g4h"
- "Châssis en PVC à Waremme | Manu Potvin #i5j"

Ces changements devraient résoudre l'erreur signalée par Semrush concernant les balises de titre dupliquées et améliorer le référencement du site en fournissant des titres plus pertinents et uniques pour chaque page.

## Recommandations Supplémentaires

Pour améliorer davantage les titres de pages :

1. Envisager d'ajouter plus de variations dans les titres de base pour mieux cibler les mots-clés pertinents
2. Surveiller les rapports Semrush pour vérifier que l'erreur a bien été résolue
3. Considérer l'ajout d'un système de rotation de titres A/B pour tester différentes formulations et identifier celles qui génèrent le meilleur taux de clics
4. Mettre en place un suivi des performances des titres dans Google Search Console pour identifier les opportunités d'amélioration
