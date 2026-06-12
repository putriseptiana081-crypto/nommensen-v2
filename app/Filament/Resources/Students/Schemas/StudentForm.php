<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('namalengkap')
                    ->label('Nama Lengkap')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan nama lengkap mahasiswa'),
                TextInput::make('namapanggilan')
                    ->label('Nama Panggilan')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan nama panggilan'),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan email mahasiswa'),
                TextInput::make('nomor_hp')
                    ->label('Nomor HP')
                    ->required()
                    ->maxLength(20)
                    ->placeholder('Masukkan nomor HP'),
                TextInput::make('jalur')
                    ->label('Jalur Masuk')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan jalur masuk'),
                FileUpload::make('image')
                    ->label('Foto Mahasiswa')
                    ->image()
                    ->directory('students')
                    ->visibility('public')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('programstudi_1')
                    ->label('Program Studi 1')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan program studi utama'),
                TextInput::make('programstudi_2')
                    ->label('Program Studi 2')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan program studi kedua'),
            ]);
    }
}
