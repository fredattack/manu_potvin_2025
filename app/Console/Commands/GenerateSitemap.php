<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Générer le sitemap XML pour le site';

    public function handle()
    {
        Sitemap::create()
            ->add(Url::create('/')->setPriority(1.0)->setChangeFrequency('yearly'))
            ->add(Url::create('/products/portes-fenetres-chassis')->setPriority(0.9)->setChangeFrequency('yearly'))
            ->add(Url::create('/products/chassis/kind/alu')->setPriority(0.9)->setChangeFrequency('yearly'))
            ->add(Url::create('/products/chassis/kind/pvc')->setPriority(0.9)->setChangeFrequency('yearly'))
            ->add(Url::create('/products/pergolas')->setPriority(0.9)->setChangeFrequency('yearly'))
            ->add(Url::create('/products/porte-de-garage')->setPriority(0.9)->setChangeFrequency('yearly'))
            ->add(Url::create('/products/moustiquaire')->setPriority(0.9)->setChangeFrequency('yearly'))
            ->add(Url::create('/contact')->setPriority(0.8)->setChangeFrequency('yearly'))
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap généré avec succès!');
    }
}
