<?php

namespace App\Filament\Resources\FilterResource\Pages;

use App\Filament\Resources\FilterResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFilter extends CreateRecord
{
    protected static string $resource = FilterResource::class;


    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
