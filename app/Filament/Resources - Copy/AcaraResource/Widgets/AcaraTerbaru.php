<?php

namespace App\Filament\Widgets;

use App\Models\Acara;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class AcaraTerbaru extends BaseWidget
{
    protected int | string | array $columnSpan = 'full'; // bisa kamu ganti ke 2/3 atau 1/2

    protected function getTableQuery(): Builder
    {
        return Acara::latest()->limit(5); // Ambil 5 acara terbaru
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('no')
                ->label('No')
                ->rowIndex() // Otomatis pakai index baris
                ->sortable(false)
                ->searchable(false),

            TextColumn::make('judul')
                ->label('Judul')
                ->limit(40)
                ->searchable()
                ->tooltip(fn($record) => $record->judul),

            TextColumn::make('lokasi')
                ->label('Lokasi')
                ->limit(30),

            // TextColumn::make('tanggal_mulai')
            //     // ->label('Tanggal Mulai')
            //     ->date('d M Y'),
        ];
    }
}