<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    public function getWidgets(): array
    {
        return [
            // Empty array - no widgets will be displayed
        ];
    }
    
    public function getColumns(): int | array
    {
        return 1;
    }
    
    public function getHeaderWidgets(): array
    {
        return [];
    }
    
    public function getFooterWidgets(): array
    {
        return [];
    }
}