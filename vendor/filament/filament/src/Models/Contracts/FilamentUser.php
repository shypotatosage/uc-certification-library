<?php

namespace Filament\Models\Contracts;

use Filament\Panel;

interface FilamentUser
{
    public function canAccessAdminPanel(Panel $panel): bool;
}
