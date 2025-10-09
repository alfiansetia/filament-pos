<?php

namespace App\Filament\Resources\Sellings\Pages;

use App\Filament\Resources\Sellings\SellingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSelling extends EditRecord
{
    protected static string $resource = SellingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
