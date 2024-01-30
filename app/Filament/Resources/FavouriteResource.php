<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FavouriteResource\Pages;
use App\Filament\Resources\FavouriteResource\RelationManagers;
use App\Models\Client;
use App\Models\Favourite;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FavouriteResource extends Resource
{
    protected static ?string $model = Favourite::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('client_id')
                    ->label('Client')
                    ->options(Client::all()->pluck('name', 'id'))
                    ->searchable(),
                Select::make('product_id')
                    ->label('Product')
                    ->options(Product::all()->pluck('name', 'id'))
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('client_id')->searchable()
                    ->label('Client'),
                TextColumn::make('product_id')->searchable()
                    ->label('Product'),
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
            'index' => Pages\ListFavourites::route('/'),
            'create' => Pages\CreateFavourite::route('/create'),
            'edit' => Pages\EditFavourite::route('/{record}/edit'),
        ];
    }
}
