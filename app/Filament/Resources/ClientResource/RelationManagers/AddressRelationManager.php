<?php

namespace App\Filament\Resources\ClientResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AddressRelationManager extends RelationManager
{
    protected static string $relationship = 'address';

    protected static ?string $recordTitleAttribute = 'city';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('city')
                    ->required()
                    ->maxLength(255),
                TextInput::make('area')->required(),
                TextInput::make('type')->required(),
                TextInput::make('buliding')->required(),
                TextInput::make('appartment')->required(),
                TextInput::make('floor')->required(),
                TextInput::make('street')->required(),
                TextInput::make('additional_directions')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('city'),
                TextColumn::make('area'),
                TextColumn::make('type')->searchable(),
                TextColumn::make('buliding'),
                TextColumn::make('appartment'),
                TextColumn::make('floor'),
                TextColumn::make('street'),
                TextColumn::make('additional_directions'),

            ])

            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
