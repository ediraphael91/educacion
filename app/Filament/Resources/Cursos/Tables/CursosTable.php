<?php

namespace App\Filament\Resources\Cursos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CursosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre')
                    ->searchable(),
                TextColumn::make('categoria')
                    ->searchable(),
                TextColumn::make('codigo')
                    ->searchable(),
                TextColumn::make('duracion')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('nivel')
                    ->searchable(),
                TextColumn::make('precio')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('estado')
                    ->searchable(),
                TextColumn::make('fecha_inicio')
                    ->date()
                    ->sortable(),
                TextColumn::make('fecha_fin')
                    ->date()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
