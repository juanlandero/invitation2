<?php

namespace App\Filament\Resources\GuestResource\Widgets;

use App\Models\Guest;
use Doctrine\DBAL\Platforms\Exception\NoColumnsSpecifiedForTable;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class ConfirmedGuest extends BaseWidget
{
    protected static ?string $heading = '';

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(fn () => Guest::where('is_confirmed', true))
            ->columns([
                TextColumn::make('family')
                    ->label('Familia')
                    ->searchable(),
                TextColumn::make('guest_quantity')
                    ->label('Total personas'),
                TextColumn::make('updated_at')
                    ->label('Última actualización')
                    ->dateTime()
            ]);
    }
}
