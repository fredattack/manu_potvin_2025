<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::updateOrCreate(
            ['slug' => 'chassis-pvc-ou-aluminium-comment-choisir'],
            [
                'title' => 'Châssis PVC ou aluminium : comment faire le bon choix ?',
                'slug' => 'chassis-pvc-ou-aluminium-comment-choisir',
                'excerpt' => 'PVC ou aluminium ? Découvrez les avantages de chaque matériau pour vos châssis, les critères de choix essentiels et nos conseils d\'expert pour faire le bon investissement pour votre maison.',
                'content' => <<<'HTML'
<h2>Un choix déterminant pour le confort et la valeur de votre maison</h2>

<p>Remplacer ses châssis est un investissement important qui impacte directement votre confort quotidien, vos factures d'énergie et la valeur de votre bien. PVC ou aluminium ? C'est la question que nous posent la majorité de nos clients à Hannut et dans toute la région. Après plus de 20 ans d'installations, voici notre guide complet pour vous aider à trancher.</p>

<h2>Les châssis en PVC : le choix de la performance au meilleur prix</h2>

<p>Le PVC reste le matériau le plus populaire en Belgique, et pour de bonnes raisons.</p>

<h3>Les avantages du PVC</h3>

<ul>
    <li><strong>Excellent rapport qualité-prix</strong> : le PVC offre des performances d'isolation thermique parmi les meilleures du marché, à un coût inférieur à l'aluminium.</li>
    <li><strong>Isolation thermique supérieure</strong> : avec un coefficient Uw pouvant descendre sous 1,0 W/m²K, vos châssis PVC réduisent significativement les déperditions de chaleur.</li>
    <li><strong>Entretien minimal</strong> : un simple nettoyage à l'eau savonneuse suffit. Pas besoin de repeindre ni de traiter le matériau au fil des années.</li>
    <li><strong>Bonne isolation acoustique</strong> : idéal si votre maison donne sur une route passante ou un environnement bruyant.</li>
    <li><strong>Durabilité</strong> : une durée de vie de 30 à 40 ans avec un entretien correct.</li>
</ul>

<h3>Les limites à connaître</h3>

<ul>
    <li>Les profilés sont légèrement plus épais que l'aluminium, ce qui réduit un peu la surface vitrée.</li>
    <li>Le choix de coloris est plus limité, même si les décors imitation bois se sont beaucoup améliorés ces dernières années.</li>
</ul>

<h2>Les châssis en aluminium : élégance et design contemporain</h2>

<p>L'aluminium séduit de plus en plus les propriétaires qui recherchent un look moderne et des lignes épurées.</p>

<h3>Les avantages de l'aluminium</h3>

<ul>
    <li><strong>Design fin et élégant</strong> : les profilés aluminium sont plus minces, ce qui maximise la surface vitrée et l'apport en lumière naturelle.</li>
    <li><strong>Large palette de couleurs</strong> : des centaines de teintes RAL disponibles, y compris des finitions mates, satinées ou texturées.</li>
    <li><strong>Robustesse exceptionnelle</strong> : l'aluminium ne se déforme pas avec le temps, même pour les grandes baies vitrées et les portes coulissantes.</li>
    <li><strong>Valeur ajoutée</strong> : l'aluminium donne un cachet indéniable à votre façade et augmente la valeur perçue de votre bien.</li>
    <li><strong>Recyclable à 100 %</strong> : un atout écologique non négligeable.</li>
</ul>

<h3>Les limites à connaître</h3>

<ul>
    <li>Le budget est plus élevé que le PVC (comptez environ 20 à 30 % de plus).</li>
    <li>L'isolation thermique naturelle de l'aluminium est moindre, mais les profilés à rupture de pont thermique modernes compensent largement cet écart.</li>
</ul>

<h2>Comparatif : PVC vs aluminium en un coup d'œil</h2>

<table>
    <thead>
        <tr>
            <th>Critère</th>
            <th>PVC</th>
            <th>Aluminium</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Isolation thermique</td>
            <td>★★★★★</td>
            <td>★★★★☆</td>
        </tr>
        <tr>
            <td>Isolation acoustique</td>
            <td>★★★★★</td>
            <td>★★★★☆</td>
        </tr>
        <tr>
            <td>Design / finesse</td>
            <td>★★★☆☆</td>
            <td>★★★★★</td>
        </tr>
        <tr>
            <td>Choix de couleurs</td>
            <td>★★★☆☆</td>
            <td>★★★★★</td>
        </tr>
        <tr>
            <td>Entretien</td>
            <td>★★★★★</td>
            <td>★★★★☆</td>
        </tr>
        <tr>
            <td>Durabilité</td>
            <td>★★★★☆</td>
            <td>★★★★★</td>
        </tr>
        <tr>
            <td>Budget</td>
            <td>★★★★★</td>
            <td>★★★☆☆</td>
        </tr>
        <tr>
            <td>Écologie</td>
            <td>★★★☆☆</td>
            <td>★★★★★</td>
        </tr>
    </tbody>
</table>

<h2>Nos conseils pour faire le bon choix</h2>

<p>Après des milliers d'installations dans la région de Hannut, Waremme et Jodoigne, voici les questions que nous posons systématiquement à nos clients :</p>

<h3>1. Quel est votre budget ?</h3>

<p>Si le budget est serré, le PVC offre les meilleures performances au meilleur prix. C'est un investissement sûr qui se rentabilise rapidement grâce aux économies d'énergie.</p>

<h3>2. Quel style architectural recherchez-vous ?</h3>

<p>Pour une maison contemporaine avec de grandes surfaces vitrées, l'aluminium est imbattable. Pour une rénovation classique ou une maison traditionnelle, le PVC (y compris en décor chêne ou anthracite) s'intègre parfaitement.</p>

<h3>3. Quelle taille pour vos ouvertures ?</h3>

<p>Pour les baies coulissantes de grande dimension (au-delà de 2,5 m), l'aluminium offre une rigidité supérieure. Pour des fenêtres standard et des portes d'entrée, le PVC convient parfaitement.</p>

<h3>4. Et pourquoi pas mixer les deux ?</h3>

<p>De plus en plus de nos clients optent pour une solution mixte : du PVC pour les fenêtres à l'étage et l'arrière de la maison, et de l'aluminium pour la façade avant et les baies vitrées du salon. C'est souvent le meilleur compromis entre budget et esthétique.</p>

<h2>Les primes énergie en Wallonie</h2>

<p>Bonne nouvelle : que vous choisissiez le PVC ou l'aluminium, vous pouvez bénéficier des <strong>primes Habitation de la Région wallonne</strong> pour le remplacement de vos châssis. Le montant varie selon la performance du vitrage et votre catégorie de revenus. Nous vous accompagnons dans les démarches administratives pour maximiser vos aides.</p>

<h2>Faites le bon choix avec un professionnel</h2>

<p>Chaque maison est unique. La meilleure façon de faire le bon choix, c'est de prendre le temps d'en discuter ensemble. Chez Manu Potvin, nous nous déplaçons gratuitement chez vous à Hannut et dans toute la région pour évaluer vos besoins, prendre les mesures et vous proposer un devis détaillé et sans engagement.</p>

<p><strong>Envie d'y voir plus clair ?</strong> Contactez-nous pour un conseil personnalisé et un devis gratuit. Ensemble, trouvons la solution idéale pour votre maison.</p>
HTML,
                'meta_title' => 'Châssis PVC ou aluminium : guide complet pour bien choisir',
                'meta_description' => 'PVC ou aluminium pour vos châssis ? Comparatif complet, avantages de chaque matériau et conseils d\'expert à Hannut. Guide pratique par Manu Potvin.',
                'published_at' => now(),
            ]
        );
    }
}