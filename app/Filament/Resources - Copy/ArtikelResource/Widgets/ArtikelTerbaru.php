<?php

namespace App\Filament\Resources\ArtikelResource\Widgets;

use Filament\Tables;
use App\Models\Artikel;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class ArtikelTerbaru extends BaseWidget
{
  protected int | string | array $columnSpan = 'full'; // Full width, bisa diubah

    protected function getTableQuery(): Builder
    {
        return Artikel::latest()->limit(5); // 5 artikel terbaru
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('judul')
                ->label('Judul')
                ->searchable()
                ->limit(40)
                ->tooltip(fn ($record) => $record->judul),

            TextColumn::make('tanggal_mulai')
                ->label('Tanggal')
                ->date('d M Y')
                ->sortable(),

            TextColumn::make('penulis.name') // jika ada relasi user
                ->label('Penulis')
                ->default('Admin'),
        ];
    }
}