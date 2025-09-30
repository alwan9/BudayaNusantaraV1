<?php

namespace App\Filament\Resources\ArtikelResource\Pages;

use App\Filament\Resources\ArtikelResource;
 
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Auth;
use Filament\Actions;
use Filament\Notifications\Notification;

class ViewArtikel extends ViewRecord
{
    protected static string $resource = ArtikelResource::class;
     protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('approve')
                ->label(fn ($record) => $record->approval?->approve ? 'Unapprove Artikel' : 'Approve Artikel')
                ->icon(fn ($record) => $record->approval?->approve ? 'heroicon-o-x-circle' : 'heroicon-o-check-circle')
                ->color(fn ($record) => $record->approval?->approve ? 'danger' : 'success')
                ->visible(fn () => Auth::user()->hasAnyRole(['admin', 'super_admin']))
                ->requiresConfirmation()
                        ->action(function ($record) {
                    // Toggle approval
                    $isApproved = $record->approval?->approve;

                    $record->approval()->updateOrCreate(
                        ['artikel_id' => $record->id],
                        [
                            'approve'     => ! $isApproved,
                            'approved_by' => ! $isApproved ? Auth::id() : null,
                        ]
                    );

                    // ✅ Use Filament v3 Notification
                    Notification::make()
                        ->title($isApproved ? 'Artikel unapproved!' : 'Artikel approved!')
                        ->success()
                        ->send();
                }),

            Actions\EditAction::make()
                ->visible(fn ($record) => $record->owner === auth()->id()),

            Actions\DeleteAction::make()
                ->visible(fn ($record) => $record->owner === auth()->id()),
        ];
    }
     
}
