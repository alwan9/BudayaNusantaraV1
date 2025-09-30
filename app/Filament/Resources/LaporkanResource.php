<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporkanResource\Pages;
use App\Filament\Resources\LaporkanResource\RelationManagers;
use App\Models\Laporkan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Illuminate\Support\Facades\Auth;

class LaporkanResource extends Resource
{
    protected static ?string $model = Laporkan::class;

    protected static ?string $navigationIcon = 'heroicon-o-exclamation-triangle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            // Pilih Acara
            Forms\Components\Select::make('acara_id')
                ->label('Pilih Acara')
                ->relationship('acara', 'judul')
                ->searchable()
                ->preload()
                    ->required()
                ->helperText('Pilih acara yang ingin Anda laporkan.'),

            // Hidden field for storing final dokumentasi path
            Forms\Components\Hidden::make('dokumentasi'),

            // Upload Gambar 1
            Forms\Components\FileUpload::make('upload_img1')
                ->label('Gambar 1')
                ->image()
                ->directory('dokumentasi/images')
                ->maxSize(2048) // 2MB per image
                ->nullable()
                ->preserveFilenames(false)
                ->visibility('public')
                ->helperText('Unggah gambar utama dokumentasi (opsional).'),

            // Upload Gambar 2
            Forms\Components\FileUpload::make('upload_img2')
                ->label('Gambar 2')
                ->image()
                ->directory('dokumentasi/images')
                ->maxSize(2048)
                ->nullable()
                ->preserveFilenames(false)
                ->visibility('public')
                ->helperText('Unggah gambar tambahan dokumentasi (opsional).'),

            // Upload Gambar 3
            Forms\Components\FileUpload::make('upload_img3')
                ->label('Gambar 3')
                ->image()
                ->directory('dokumentasi/images')
                ->maxSize(2048)
                ->nullable()
                ->preserveFilenames(false)
                ->visibility('public')
                ->helperText('Unggah gambar tambahan dokumentasi (opsional).'),

            // Upload Video
            Forms\Components\FileUpload::make('upload_video')
                ->label('Video Dokumentasi')
                ->directory('dokumentasi/video')
                ->acceptedFileTypes(['video/mp4', 'video/mpeg', 'video/quicktime'])
                ->maxSize(10240) // 10MB
                ->nullable()
                ->preserveFilenames(false)
                ->visibility('public')
                ->helperText('Unggah video dokumentasi (maks. 10MB).'),

            // Hidden fields for tracking
            Forms\Components\Hidden::make('user_acara_id'),
            Forms\Components\Hidden::make('user_pelapor_id'),

            // Keterangan
            Forms\Components\Textarea::make('keterangan')
                ->label('Keterangan Tambahan')
                ->placeholder('Tuliskan keterangan tambahan mengenai dokumentasi acara...')
                ->columnSpanFull()
                ->helperText('Opsional: Jelaskan detail dokumentasi atau catatan penting.'),

            // Jenis Keluhan / Laporan
            Forms\Components\TextInput::make('jenis_keluhan')
                ->label('Jenis Keluhan / Laporan')
                ->placeholder('Contoh: Dokumentasi rusak atau tidak lengkap')
                    ->required()
                ->maxLength(255)
                ->helperText('Tuliskan jenis keluhan atau laporan terkait dokumentasi acara.'),
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
            Tables\Columns\TextColumn::make('acara.judul')
                ->label('Acara')
                ->sortable()
                    ->searchable(),

            Tables\Columns\TextColumn::make('jenis_keluhan')
                ->label('Jenis Keluhan')
                    ->searchable(),

            Tables\Columns\TextColumn::make('keterangan')
                ->label('Keterangan')
                ->limit(50)
                ->toggleable(),
            Tables\Columns\ImageColumn::make('dokumentasi_id.img1')
                ->label('Image 1')
                ->square(),

            Tables\Columns\ImageColumn::make('dokumentasi_id.img2')
                ->label('Image 2')
                ->square(),

            Tables\Columns\ImageColumn::make('dokumentasi_id.img3')
                ->label('Image 3')
                ->square(),

            // Show video as a clickable link
            Tables\Columns\TextColumn::make('dokumentasi_id.video')
                ->label('Video')
                ->url(fn($record) => $record->images?->video ? asset('storage/' . $record->images->video) : null)
                ->openUrlInNewTab(),

            Tables\Columns\TextColumn::make('created_at')
                ->label('Dilaporkan Pada')
                    ->dateTime()
                ->sortable(),
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

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        if (auth()->user()->hasRole('user')) {
            // Normal users only see their own reports
            return $query->where('user_pelapor_id', Auth::id());
        }

        // Admin can see all
        return $query;
    }

    public static function canEdit($record): bool
    {
        return $record->user_pelapor_id === auth()->id();
    }


    public static function canDelete($record): bool
    {
        return $record->user_pelapor_id === auth()->id();
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLaporkans::route('/'),
            'create' => Pages\CreateLaporkan::route('/create'),
            'edit' => Pages\EditLaporkan::route('/{record}/edit'),
            'view' => Pages\ViewLaporkan::route('/{record}'),
        ];
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Laporan')
                    ->schema([
                        TextEntry::make('acara.judul')->label('Acara'),
                        TextEntry::make('acara.id')->label('Acara Id'),
                        TextEntry::make('jenis_keluhan')->label('Jenis Keluhan'),

                        TextEntry::make('approval.approve')
                            ->label('Approval')
                            ->badge()
                            ->formatStateUsing(fn($state) => $state ? 'Approved' : 'Pending')
                            ->color(fn($state) => $state ? 'success' : 'warning'),
                    ])->columns(2),
                Section::make('Isi Artikel')
                    ->schema([
                        TextEntry::make('keterangan')->label('Keterangan'),


                    ])->columns(1),

                Section::make('Media')
                    ->schema([
                        ImageEntry::make('dokumentasi_id.img1')
                            ->label('Image 1')
                            ->disk('public')      // uses /storage URLs
                            ->square()
                            ->hidden(fn($record) => blank($record->dokumentasi_id?->img1)),

                        ImageEntry::make('dokumentasi_id.img2')
                            ->label('Image 2')
                            ->disk('public')
                            ->square()
                            ->hidden(fn($record) => blank($record->dokumentasi_id?->img2)),

                        ImageEntry::make('dokumentasi_id.img3')
                            ->label('Image 3')
                            ->disk('public')
                            ->square()
                            ->hidden(fn($record) => blank($record->dokumentasi_id?->img3)),

                        TextEntry::make('dokumentasi_id.video')
                            ->label('Video')
                            ->url(fn($record) => $record->dokumentasi_id?->video
                                ? asset('storage/' . $record->dokumentasi_id->video)
                                : null)
                            ->openUrlInNewTab()
                            ->visible(fn($record) => filled($record->dokumentasi_id?->video)),
                    ])->columns(3),
            ]);
    }
}