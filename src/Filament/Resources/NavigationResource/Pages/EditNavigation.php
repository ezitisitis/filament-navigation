<?php

namespace EzitisItIs\FilamentNavigation\Filament\Resources\NavigationResource\Pages;

use Filament\Resources\Pages\EditRecord;
use EzitisItIs\FilamentNavigation\Filament\Resources\NavigationResource\Pages\Concerns\HandlesNavigationBuilder;
use EzitisItIs\FilamentNavigation\FilamentNavigation;

class EditNavigation extends EditRecord
{
    use HandlesNavigationBuilder;

    public static function getResource(): string
    {
        return FilamentNavigation::get()->getResource();
    }
}
