<?php

namespace App\Filament\Resources\Students\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StudentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Foto')
                    ->disk('public')
                    ->circular()
                    ->size(40),
                TextColumn::make('namalengkap')
                    ->label('Nama Lengkap')
                    ->searchable(),
                TextColumn::make('namapanggilan')
                    ->label('Nama Panggilan')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                TextColumn::make('nomor_hp')
                    ->label('Nomor HP')
                    ->searchable(),
                TextColumn::make('jalur')
                    ->label('Jalur Masuk')
                    ->badge()
                    ->color(fn (string $state): string => match (true) {
                        str_contains(strtolower($state), 'reguler') => 'success',
                        str_contains(strtolower($state), 'prestasi') => 'warning',
                        str_contains(strtolower($state), 'mandiri') => 'info',
                        str_contains(strtolower($state), 'beasiswa') => 'danger',
                        str_contains(strtolower($state), 'transfer') => 'primary',
                        default => 'gray',
                    })
                    ->searchable(),
                TextColumn::make('programstudi_1')
                    ->label('Program Studi 1')
                    ->searchable(),
                TextColumn::make('programstudi_2')
                    ->label('Program Studi 2')
                    ->searchable(),
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
