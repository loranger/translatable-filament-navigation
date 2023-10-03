<?php

namespace App\Filament\Resources\NavigationResource\Pages;

use App\Filament\Resources\NavigationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNavigations extends ListRecords
{
    protected static string $resource = NavigationResource::class;

    public static function getResource(): string
    {
        return config('filament-navigation.navigation_resource') ?? NavigationResource::class;
    }
}
