<?php

namespace App\Filament\Resources\Sellings;

use App\Filament\Resources\Sellings\Pages\CreateSelling;
use App\Filament\Resources\Sellings\Pages\EditSelling;
use App\Filament\Resources\Sellings\Pages\ListSellings;
use App\Filament\Resources\Sellings\Schemas\SellingForm;
use App\Filament\Resources\Sellings\Tables\SellingsTable;
use App\Models\Selling;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SellingResource extends Resource
{
    protected static ?string $model = Selling::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Selling';

    public static function form(Schema $schema): Schema
    {
        return SellingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SellingsTable::configure($table);
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
            'index' => ListSellings::route('/'),
            'create' => CreateSelling::route('/create'),
            'edit' => EditSelling::route('/{record}/edit'),
        ];
    }
}
