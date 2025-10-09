<?php

namespace App\Filament\Resources\Sellings\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SellingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('member_id')
                    ->numeric(),
                TextInput::make('user_id')
                    ->numeric(),
                DateTimePicker::make('date')
                    ->required(),
                TextInput::make('code')
                    ->required(),
                TextInput::make('discount')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('pay_amount')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('status')
                    ->required(),
                DateTimePicker::make('done_at'),
                TextInput::make('done_by')
                    ->numeric(),
            ]);
    }
}
