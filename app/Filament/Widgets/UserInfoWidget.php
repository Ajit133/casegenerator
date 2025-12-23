<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

class UserInfoWidget extends Widget
{
    protected string $view = 'filament.widgets.user-info-widget';

    public function getUser()
    {
        return Auth::user();
    }
}