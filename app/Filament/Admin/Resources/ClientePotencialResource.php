<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ClientePotencialResource\Pages;
use App\Filament\Admin\Resources\ClientePotencialResource\RelationManagers;
use App\Models\ClientePotencial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClientePotencialResource extends Resource
{
    protected static ?string $model = ClientePotencial::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListClientePotencials::route('/'),
            'create' => Pages\CreateClientePotencial::route('/create'),
            'edit' => Pages\EditClientePotencial::route('/{record}/edit'),
        ];
    }
}
