<?php

namespace Database\Seeders;

use App\Models\Realisation;
use File;
use Illuminate\Database\Seeder;

class RealisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $achievements = [
            ['name' => 'Porte pvc', 'picture' => '/assets/images/custom/default/chassis/porto_chassis_01.jpg', 'category' => ['chassis']],
            ['name' => 'Porte Aluminium', 'picture' => '/assets/images/custom/default/chassis/porto_chassis_0.jpg', 'category' => ['chassis']],
            ['name' => 'chassis Aluminium', 'picture' => '/assets/images/custom/default/chassis/porto_chassis_3.jpg', 'category' => ['chassis']],
            ['name' => 'Moustiquaire fenêko', 'picture' => '/assets/images/custom/default/moustiquaire/porto_moustiquaire_1.jpg', 'category' => ['moustiquaires']],
            ['name' => 'Chassis PVC', 'picture' => '/assets/images/custom/default/chassis/porto_chassis_1.jpg', 'category' => ['chassis']],
            ['name' => 'Porte Aluminium', 'picture' => '/assets/images/custom/default/chassis/porto_chassis_5.jpg', 'category' => ['chassis']],
            ['name' => 'Moustiquaire Feneko', 'picture' => '/assets/images/custom/default/moustiquaire/porto_moustiquaire_2.jpg', 'category' => ['moustiquaires']],
            ['name' => 'Kömmerling', 'picture' => '/assets/images/custom/default/chassis/porto_chassis_1_last.jpg', 'category' => ['chassis']],
            ['name' => 'Kömmerling', 'picture' => '/assets/images/custom/default/chassis/porto_chassis_2_last.jpg', 'category' => ['chassis']],
            ['name' => 'Kömmerling', 'picture' => '/assets/images/custom/default/chassis/porto_chassis_3_last.jpg', 'category' => ['chassis']],
            ['name' => 'Kömmerling', 'picture' => '/assets/images/custom/default/chassis/porto_chassis_4.jpg', 'category' => ['chassis']],
            ['name' => 'Porte de Garage', 'picture' => '/assets/images/custom/default/portes-de-garage/porte_garage_1_last.jpg', 'category' => ['porte_de_garage']],
            ['name' => 'Porte de Garage', 'picture' => '/assets/images/custom/default/portes-de-garage/porte_garage_2_last.jpg', 'category' => ['porte_de_garage']],
            ['name' => 'Fermeture de Moustiquaire', 'picture' => '/assets/images/custom/default/moustiquaire/moustiquaire_1_last.jpg', 'category' => ['moustiquaires']],
            ['name' => 'Moustiquaire coulissant', 'picture' => '/assets/images/custom/default/moustiquaire/moustiquaire_4_last.jpg', 'category' => ['moustiquaires']],
            ['name' => 'Moustiquaire coulissant', 'picture' => '/assets/images/custom/default/moustiquaire/moustiquaire_5_last.jpg', 'category' => ['moustiquaires']],
            ['name' => 'Moustiquaire coulissant', 'picture' => '/assets/images/custom/default/moustiquaire/moustiquaire_6_last.jpg', 'category' => ['moustiquaires']],
            ['name' => 'moustiquaire coulissante Élégance', 'picture' => '/assets/images/custom/default/moustiquaire/moustiquaire_7_last.jpg', 'category' => ['moustiquaires']],
            ['name' => 'Chatiére pour Moustiquaire', 'picture' => '/assets/images/custom/default/moustiquaire/mousiquaire_chatiere.jpg', 'category' => ['moustiquaires']],
            ['name' => 'Moustiquaire avec chatiére', 'picture' => '/assets/images/custom/default/moustiquaire/mousiquaire_chatiere_2.jpg', 'category' => ['moustiquaires']],
            ['name' => 'Moustiquaire', 'picture' => '/assets/images/custom/default/moustiquaire/moustiquaire_2_last.jpg', 'category' => ['moustiquaires']],
            ['name' => 'chassis black cherry', 'picture' => '/assets/images/custom/default/chassis/porto_chassis_6.jpg', 'category' => ['chassis']],
            ['name' => 'Hörman', 'picture' => '/assets/images/custom/default/portes-de-garage/porto_garage_1.jpg', 'category' => ['porte_de_garage']],
            ['name' => 'Kömmerling', 'picture' => '/assets/images/custom/default/portes-de-garage/porto_garage_2.jpg', 'category' => ['porte_de_garage']],
            ['name' => 'chassis black cherry', 'picture' => '/assets/images/custom/default/chassis/porto_chassis_6.jpg', 'category' => ['chassis']],
            ['name' => 'Kömmerling', 'picture' => '/assets/images/custom/default/chassis/porto_chassis_2.jpg', 'category' => ['chassis']],
            ['name' => 'Kömmerling', 'picture' => '/assets/images/custom/default/chassis/porto_chassis_4_last.jpg', 'category' => ['chassis']],
            ['name' => 'Moustiquaire coulissant', 'picture' => '/assets/images/custom/default/moustiquaire/moustiquaire_3_last.jpg', 'category' => ['moustiquaires']],
            ['name' => 'pergolas skylux', 'picture' => '/assets/images/custom/default/pergolas/pergolas1.jpeg', 'category' => ['pergolas']],
        ];


        foreach ($achievements as $data) {
            $achievement =     Realisation::create([
                'title' => $data['name'],
                'description' => $data['description'] ?? null,
                'category' => $data['category'],
                'published' => true,
            ]);

            // Vérifiez si le fichier existe dans le chemin public
            $picturePath = public_path($data['picture']);

            // Si une image est trouvée, ajoutez-la
            if (file_exists($picturePath)) {
                ray('exist')->orange();

                $achievement
                    ->addMedia($picturePath)
                    ->withResponsiveImages()
                    ->toMediaCollection('illustration');

            } else {
                // Log ou avertissement en cas d'image introuvable
                \Log::warning("L'image {$data['picture']} est introuvable pour {$data['name']}");
            }
        }
    }

}
