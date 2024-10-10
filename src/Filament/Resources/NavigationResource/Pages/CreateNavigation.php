<?php

namespace EzitisItIs\FilamentNavigation\Filament\Resources\NavigationResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use EzitisItIs\FilamentNavigation\Filament\Resources\NavigationResource\Pages\Concerns\HandlesNavigationBuilder;
use EzitisItIs\FilamentNavigation\FilamentNavigation;

class CreateNavigation extends CreateRecord
{
    use HandlesNavigationBuilder;

    public static function getResource(): string
    {
        return FilamentNavigation::get()->getResource();
    }
}
