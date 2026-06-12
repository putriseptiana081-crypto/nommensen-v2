<?php

namespace App\Filament\Resources\Visimisis\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class VisimisiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('visi')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('misi')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Foto Visi Misi')
                    ->image()
                    ->multiple()
                    ->reorderable()
                    ->maxFiles(5)
                    ->directory('visimisis')
                    ->visibility('public')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
