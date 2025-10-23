<?php
namespace App\Models;
class offerte
{
    public static function getOfferteById(string $id): ?array
    {
        return self::$offertes[$id] ?? null;
    }

    private static array $offertes = [
        'of12872' => [
            'offertenummer' => 'of12872',
            'klant' => 'Van Meer Solutions',
        'bedrag' => 1500.50
    ],
    'of10632' => [
        'offertenummer' => 'of10632',
        'klant' => 'Groene vingers',
        'bedrag' => 1200.00
    ],
    'of28003' => [
        'offertenummer' => 'of28003',
        'klant' => "Mario's pizza",
        'bedrag' => 2500.75
    ],
    'of10891' => [
        'offertenummer' => 'of10891',
        'klant' => 'Blauwwater Consulting',
            'bedrag' => 1750.00
        ]
    ];
}
