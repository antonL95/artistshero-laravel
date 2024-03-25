<?php

namespace App\Filament\Resources\FilterResource\Pages;

use App\Filament\Resources\FilterResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFilter extends EditRecord
{
    protected static string $resource = FilterResource::class;


    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
