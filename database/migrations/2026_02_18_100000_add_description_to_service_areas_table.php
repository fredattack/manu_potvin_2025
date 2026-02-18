<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('service_areas', function (Blueprint $table) {
            $table->text('description')->nullable()->after('notes');
        });

        $this->seedDescriptions();
    }

    private function seedDescriptions(): void
    {
        $descriptions = [
            'Hannut' => '<p>Basée à <strong>Hannut</strong>, notre entreprise intervient directement au cœur de la ville et dans toutes les sections environnantes : Thisnes, Crehen, Abolens, Lens-Saint-Remy et Merdorp. Située à proximité de la gare de Hannut et du centre-ville commerçant, nous offrons une réactivité maximale pour vos projets de châssis, portes, fenêtres et pergolas.</p><p>En tant que siège de notre activité, Hannut bénéficie de délais d\'intervention particulièrement courts. Que vous habitiez près de la Grand-Place, du parc communal ou dans les quartiers résidentiels, nous sommes à votre porte en quelques minutes pour un devis gratuit et sans engagement.</p>',

            'Waremme' => '<p>Ville dynamique au cœur de la <strong>Hesbaye liégeoise</strong>, <strong>Waremme</strong> est située à seulement 15 minutes de notre siège à Hannut. Nous intervenons régulièrement dans cette commune et ses sections — Oleye, Grand-Axhe, Bettincourt et Lantremange — pour des projets de menuiserie extérieure.</p><p>Waremme, avec son marché hebdomadaire réputé et son centre-ville animé, compte de nombreuses habitations nécessitant la rénovation ou le remplacement de châssis. Nos équipes connaissent bien les spécificités architecturales de la région hesbignonne et vous conseillent les solutions les mieux adaptées à votre habitation.</p>',

            'Jodoigne' => '<p>Située en <strong>Brabant wallon</strong>, <strong>Jodoigne</strong> est une ville au riche patrimoine historique que nous desservons depuis Hannut en environ 20 minutes. Nous intervenons dans l\'ensemble de la commune, y compris à Piétrain, Jodoigne-Souveraine, Lathuy, Mélin et Saint-Jean-Geest.</p><p>Le centre historique de Jodoigne, avec ses bâtiments de caractère et ses maisons en pierre locale, nécessite souvent des solutions sur mesure en matière de châssis et de portes. Notre expertise nous permet de concilier performance thermique moderne et respect de l\'esthétique architecturale brabançonne.</p>',

            'Orp-Jauche' => '<p>Commune rurale du <strong>Brabant wallon</strong>, <strong>Orp-Jauche</strong> se situe à proximité immédiate de Jodoigne et à environ 15 minutes de notre siège à Hannut. Nous couvrons l\'ensemble de ses villages : Orp-le-Grand, Orp-le-Petit, Jauche, Noduwez, Marilles et Enines.</p><p>Le caractère rural d\'Orp-Jauche, avec ses fermes rénovées et ses nouvelles constructions, offre une diversité de projets en menuiserie extérieure. Que ce soit pour remplacer les châssis d\'une ancienne fermette ou équiper une maison neuve, nous apportons des solutions adaptées au cadre paisible de cette commune.</p>',

            'Braives' => '<p>Implantée entre <strong>Hannut et Huy</strong>, la commune de <strong>Braives</strong> bénéficie d\'un cadre verdoyant typique de la Hesbaye. À seulement 10 minutes de notre siège, nous desservons toutes ses sections : Ciplet, Fallais, Fumal, Latinne, Tourinne et Avennes.</p><p>Les habitations de Braives, qu\'il s\'agisse de maisons traditionnelles en briques ou de constructions plus récentes, trouvent dans notre gamme de châssis PVC et aluminium des solutions parfaitement adaptées au climat de la vallée de la Mehaigne. Nous proposons également des pergolas idéales pour profiter des jardins spacieux de cette commune résidentielle.</p>',

            'Hélécine' => '<p>Commune paisible du <strong>Brabant wallon</strong>, <strong>Hélécine</strong> se situe à la croisée de Jodoigne et Tienen, à environ 20 minutes de Hannut. Nous intervenons dans ses différents villages : Linsmeau, Neerheylissem et Opheylissem.</p><p>Hélécine, connue pour son domaine provincial et son cadre de vie verdoyant, attire de nombreuses familles qui investissent dans la rénovation de leur habitation. Nos solutions de châssis, portes et fenêtres offrent d\'excellentes performances énergétiques, un atout majeur pour les maisons de cette commune où le confort thermique est essentiel.</p>',
        ];

        foreach ($descriptions as $name => $description) {
            DB::table('service_areas')
                ->where('name', $name)
                ->update(['description' => $description]);
        }
    }
};
