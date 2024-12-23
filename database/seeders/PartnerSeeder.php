<?php

namespace Database\Seeders;

use App\Models\Partner;
use App\Models\Realisation;
use File;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {

        // delete all partners
        Partner::truncate();

        $achievements = [[
            'name' => 'Hormann',
            'logo' => '/assets/images/custom/HormannLogo.jpg',
        ], [
            'name' => 'Feneko',
            'logo' => '/assets/images/custom/feneko_logo.png',
        ], [
            'name' => 'AGC',
            'logo' => '/assets/images/custom/AGC-Logo-BrandStatement_Center_web.png',
        ], [
            'name' => 'aliplast',
            'logo' => '/assets/images/custom/aliplast.png',
        ], [
            'name' => 'Kömmerling',
            'logo' => '/assets/images/custom/kommerling.png',
        ], [
            'name' => 'SkyLux',
            'logo' => '/assets/images/custom/SkyLux.png',
        ]];

        foreach ($achievements as $data) {
            $achievement =     Partner::create([
                'name' => $data['name'],
            ]);

            // Vérifiez si le fichier existe dans le chemin public
            $picturePath = public_path($data['logo']);

            // Si une image est trouvée, ajoutez-la
            if (file_exists($picturePath)) {
                ray('exist')->orange();

                $achievement
                    ->addMedia($picturePath)
                    ->withResponsiveImages()
                    ->toMediaCollection('illustration');

            } else {
                // Log ou avertissement en cas d'image introuvable
                \Log::warning("L'image {$data['logo']} est introuvable pour {$data['name']}");
            }
        }
    }

}
