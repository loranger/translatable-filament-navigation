<?php

namespace App\Filament\Resources\NavigationResource\Pages;

use App\Filament\Resources\NavigationResource;
use App\Filament\Resources\NavigationResource\Pages\Concerns\HandlesNavigationBuilder;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;


class CreateNavigation extends CreateRecord
{
    protected static string $resource = NavigationResource::class;
    use HandlesNavigationBuilder;

    public static function getResource(): string
    {
        return config('filament-navigation.navigation_resource') ?? NavigationResource::class;
    }
}
