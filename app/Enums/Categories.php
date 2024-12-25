<?php

namespace App\Enums;

use Arr;

enum Categories: string
{
    case ALL = 'tout';
    case CHASSIS = 'chassis';
    case PORTE_DE_GARAGE = 'porte_de_garage';
    case PERGOLAS = 'pergolas';
    case MOUSTIQUAIRES = 'moustiquaires';

    public function label(): string
    {
        return match($this) {
            self::ALL => 'Tout',
            self::CHASSIS => 'Châssis',
            self::PORTE_DE_GARAGE => 'Portes de garage',
            self::PERGOLAS => 'Pergolas',
            self::MOUSTIQUAIRES => 'Moustiquaires',
        };
    }
    public function urlPath(): string
    {
        return match($this) {
            self::CHASSIS => 'portes-fenetres-chassis',
            self::PORTE_DE_GARAGE => 'porte-de-garage',
            self::PERGOLAS => 'pergolas',
            self::MOUSTIQUAIRES => 'moustiquaire',
        };
    }

    public function description(): string
    {
        return match($this) {
            self::CHASSIS => 'Des solutions sur mesure pour vos portes, fenêtres et châssis, alliant design et performance.',
            self::PORTE_DE_GARAGE => 'Sécurité et style pour vos portes de garage, adaptées à tous vos besoins.',
            self::PERGOLAS => 'Créez un espace extérieur élégant et confortable avec nos pergolas, alliant design moderne et protection optimale.',
            self::MOUSTIQUAIRES => 'Protégez votre intérieur avec des moustiquaires pratiques et discrètes.',
        };
    }

    /**
     * Retourne toutes les catégories sous forme de tableau.
     */
    public static function all(): array
    {
        return array_map(fn($category) => [
            'key' => $category->value,
            'label' => $category->label()
        ], self::cases());
    }
    public static function getLabelByKey(string $key): string
    {
        $category = self::tryFrom($key);

        return $category?->label() ?? 'Label non trouvé';
    }
    //

    public static function getCategoryLabels(array $categoryArray) : string
    {
        return Arr::join(
            collect($categoryArray)
                ->map(fn($item) => self::getLabelByKey($item))
                ->toArray(),
            ','
        );
    }

    public static function getDescription(string $key): string
    {
        $category = self::tryFrom($key);

        return  $category?->description() ?? 'Label non trouvé';
    }

    public static function getUrlPath(string $key): string
    {
        $category = self::tryFrom($key);

        return  $category?->urlPath() ?? 'Label non trouvé';
    }

    public static  function  hasValue($VALUE)
    {
        return in_array($VALUE, collect(self::all())->pluck('key')->toArray());
    }

}
