<?php

namespace App\Filament\Resources\LaporkanResource\Pages;

use App\Filament\Resources\LaporkanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporkans extends ListRecords
{
    protected static string $resource = LaporkanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
