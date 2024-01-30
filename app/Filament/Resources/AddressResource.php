<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AddressResource\Pages;
//use App\Filament\Resources\AddressResource\RelationManagers;
use App\Models\Address;
use App\Models\Client;
use Filament\Forms;
//use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AddressResource extends Resource
{
    protected static ?string $model = Address::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';

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
                TextColumn::make('client_id'),
                TextColumn::make('city'),
                TextColumn::make('type'),
                TextColumn::make('area'),
                TextColumn::make('buliding'),
                TextColumn::make('appartment'),
                TextColumn::make('floor'),
                TextColumn::make('street'),
                TextColumn::make('additional_directions'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAddresses::route('/'),
            'create' => Pages\CreateAddress::route('/create'),
            'edit' => Pages\EditAddress::route('/{record}/edit'),
        ];
    }
}
