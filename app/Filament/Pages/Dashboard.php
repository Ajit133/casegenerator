<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\UserInfoWidget;

class Dashboard extends BaseDashboard
{
    public function getWidgets(): array
    {
        return [
            UserInfoWidget::class,
        ];
    }
    
    public function getColumns(): int | array
    {
        return 1;
    }
}