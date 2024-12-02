<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ListFilesTree extends Command
{
    const EXCLUDED_DIR = ['vendor', 'node_modules','framework'];
    protected $signature = 'app:list-files-tree';
    protected $description = 'Liste tous les fichiers de l\'application Laravel dans une arborescence';

    public function handle()
    {
        $path = base_path();
        $tree = $this->getDirectoryTree($path);

        file_put_contents(base_path('tree.txt'), $tree);

        $this->info('L\'arborescence des fichiers a été sauvegardée dans tree.txt');

    }

    private function getDirectoryTree($directory, $prefix = '')
    {

        $tree = '';
        $items = File::directories($directory);
        $files = File::files($directory);

        foreach ($files as $file) {
            $isUsed = $this->isFileUsed($file->getRealPath()) ? '✔' : '✘';
            $tree .= $prefix . '├── ' . $file->getFilename() . ' ' . $isUsed . PHP_EOL;
        }

        foreach ($items as $item) {
            $folderName = basename($item);

            // Skip directories that are in the exclusion list
            if (in_array($folderName, self::EXCLUDED_DIR)) {
                continue;
            }

            $tree .= $prefix . '└── ' . $folderName . PHP_EOL;
            $tree .= $this->getDirectoryTree($item, $prefix . '    ', self::EXCLUDED_DIR);
        }

        return $tree;
    }


    private function isFileUsed($filePath)
    {
        // Exemple : Vérifier dans une base de données ou un fichier JSON
        $usedFiles = $this->getUsedFilesList();

        return in_array($filePath, $usedFiles);
    }

    private function getUsedFilesList()
    {
        // Simule une liste de fichiers utilisés (remplacez cela par une vraie logique)
        return [
            base_path('resources/views/Frontend/Homes/home3.blade.php'),
            base_path('resources/views/Frontend/Layouts/app.blade.php'),

        ];
    }


}
