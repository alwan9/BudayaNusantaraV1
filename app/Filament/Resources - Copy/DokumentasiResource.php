<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokumentasiResource\Pages;
use App\Filament\Resources\DokumentasiResource\RelationManagers;
use App\Models\Dokumentasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DokumentasiResource extends Resource
{
    protected static ?string $model = Dokumentasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('img1')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('img2')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('img3')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('video')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('No')
                ->label('No')
                ->rowIndex()
                ->alignCenter()
                ->width('60px'),
                Tables\Columns\TextColumn::make('img1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('img2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('img3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('video')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDokumentasis::route('/'),
            'create' => Pages\CreateDokumentasi::route('/create'),
            'edit' => Pages\EditDokumentasi::route('/{record}/edit'),
        ];
    }
    public static function canEdit($record): bool
    {
        return $record->owner === auth()->id();
    }

    public static function canDelete($record): bool
    {
        return $record->owner === auth()->id();
    }
}