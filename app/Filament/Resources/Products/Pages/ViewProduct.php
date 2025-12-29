<?php

namespace App\Filament\Resources\Products\Pages;

use App\Filament\Resources\Products\ProductResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\Action;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Storage;

class ViewProduct extends ViewRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('downloadPdf')
                ->label('Download PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->color('success')
                ->visible(fn () => $this->record->hasPdfFile())
                ->action(function () {
                    $filePath = storage_path('app/public/' . $this->record->pdf_file);
                    $fileName = $this->record->pdf_title ?: pathinfo($this->record->pdf_file, PATHINFO_BASENAME);
                    
                    if (file_exists($filePath)) {
                        return response()->download($filePath, $fileName);
                    }
                    
                    $this->notify('danger', 'PDF file not found.');
                }),
            EditAction::make(),
            DeleteAction::make(),
        ];
    }
}