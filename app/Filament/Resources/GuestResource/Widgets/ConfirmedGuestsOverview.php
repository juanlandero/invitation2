<?php

namespace App\Filament\Resources\GuestResource\Widgets;

use App\Models\Guest;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ConfirmedGuestsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total de invitados', Guest::all()->sum('guest_quantity')),
            Stat::make('Confirmados', Guest::where('is_confirmed', true)->sum('guest_quantity')),
            Stat::make('Sin confirmar', Guest::where('is_confirmed', false)->sum('guest_quantity')),
        ];
    }
}
