<?php

namespace App\Filament\Resources\EquipaResource\Pages;

use App\Filament\Resources\EquipaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEquipas extends ListRecords
{
    protected static string $resource = EquipaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
