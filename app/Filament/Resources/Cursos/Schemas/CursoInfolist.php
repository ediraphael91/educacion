<?php

namespace App\Filament\Resources\Cursos\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CursoInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nombre'),
                TextEntry::make('categoria'),
                TextEntry::make('codigo'),
                TextEntry::make('duracion')
                    ->numeric(),
                TextEntry::make('nivel'),
                TextEntry::make('precio')
                    ->numeric(),
                TextEntry::make('estado'),
                TextEntry::make('fecha_inicio')
                    ->date(),
                TextEntry::make('fecha_fin')
                    ->date(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
