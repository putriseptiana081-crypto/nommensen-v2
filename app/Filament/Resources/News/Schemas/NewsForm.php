<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Berita')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('contoh: Universitas Nommensen Raih Peringkat Terbaik')
                    ->helperText('Slug URL akan dibuat otomatis dari judul ini.')
                    ->columnSpanFull(),

                RichEditor::make('content')
                    ->label('Isi Berita')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'bulletList',
                        'orderedList',
                        'link',
                    ])
                    ->required()
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->label('Foto Berita')
                    ->image()
                    ->directory('news')
                    ->visibility('public')
                    ->maxSize(2048)
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
