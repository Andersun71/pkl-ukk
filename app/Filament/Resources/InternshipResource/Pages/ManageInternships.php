<?php

namespace App\Filament\Resources\InternshipResource\Pages;

use App\Filament\Resources\InternshipResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use App\Models\Internship;
use Filament\Tables;

use App\Models\Student;
class ManageInternships extends ManageRecords
{
    protected static string $resource = InternshipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->after(function (Internship $record) {
                    $record->student->update(['internship_status' => 1]);
                }),

        ];
    }

    protected function getTableActions(): array
    {
        return [
            Actions\DeleteAction::make()
                // ->after(function (Internship $record) { {
                //         $record->student->update(['internship_status' => 0]);
                //     }
                // }),
        ];
    }
}
