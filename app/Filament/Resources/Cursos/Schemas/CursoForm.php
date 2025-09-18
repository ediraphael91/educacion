<?php

namespace App\Filament\Resources\Cursos\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CursoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('categoria')
                    ->required(),
                TextInput::make('codigo')
                    ->required(),
                Textarea::make('descripcion')
                    ->columnSpanFull(),
                TextInput::make('duracion')
                    ->numeric(),
                TextInput::make('nivel')
                    ->required()
                    ->default('Básico'),
                TextInput::make('precio')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('estado')
                    ->required()
                    ->default('activo'),
                DatePicker::make('fecha_inicio'),
                DatePicker::make('fecha_fin'),
            ]);
    }
}
