<?php

namespace EzitisItIs\FilamentNavigation\Tests;

use Filament\Panel;
use Filament\PanelProvider;
use EzitisItIs\FilamentNavigation\FilamentNavigation;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->plugin(FilamentNavigation::make());
    }
}
