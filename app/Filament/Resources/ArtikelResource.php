<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Filament\Resources\ArtikelResource\RelationManagers;
use App\Models\Artikel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            // Judul Acara
            Forms\Components\TextInput::make('judul')
                ->label('Judul Acara')
                ->placeholder('Masukkan judul acara')
                    ->required()
                ->maxLength(255)
                ->helperText('Judul acara harus singkat dan jelas.'),

            Forms\Components\Hidden::make('img'),
                Forms\Components\Hidden::make('owner'),

            // Upload Image 1
            Forms\Components\FileUpload::make('upload_img1')
                ->label('Gambar Utama')
                    ->image()
                    ->directory('images')
                    ->maxSize(2048)
                ->nullable()
                ->preserveFilenames(false)
                ->visibility('public')
                ->helperText('Unggah gambar utama acara. Maksimal ukuran 2MB.'),

            // Upload Image 2
            Forms\Components\FileUpload::make('upload_img2')
                ->label('Gambar Tambahan 1')
                    ->image()
                    ->directory('images')
                    ->maxSize(2048)
                ->nullable()
                ->preserveFilenames(false)
                ->visibility('public')
                ->helperText('Opsional: Gambar tambahan pertama.'),

            // Upload Image 3
            Forms\Components\FileUpload::make('upload_img3')
                ->label('Gambar Tambahan 2')
                    ->image()
                    ->directory('images')
                    ->maxSize(2048)
                ->nullable()
                ->preserveFilenames(false)
                ->visibility('public')
                ->helperText('Opsional: Gambar tambahan kedua.'),

            Forms\Components\TextInput::make('upload_video')
                ->label('YouTube Video URL')
                ->placeholder('https://www.youtube.com/watch?v=XXXXXX')
                ->maxLength(255)
                ->nullable()
                ->prefixIcon('heroicon-o-video-camera')
                ->helperText('Masukkan URL video YouTube yang valid.')
                ->reactive()
                ->afterStateUpdated(function ($state, callable $set) {
                    if (blank($state)) {
                        return;
                    }

                // Regex to extract YouTube Video ID from ANY valid YouTube link
                $pattern = '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:watch\?v=|embed\/|shorts\/)|youtu\.be\/)([A-Za-z0-9_-]{11})/';

                    if (preg_match($pattern, $state, $matches)) {
                        // Normalize URL to a clean format
                        $videoId = $matches[1];
                        $cleanUrl = "https://www.youtube.com/watch?v={$videoId}";
                        $set('youtube_url', $cleanUrl);
                    }
                })
                ->rules([
                    'nullable',
                    'regex:/^(https?:\/\/)?(www\.)?(youtube\.com|youtu\.be)\/.+$/'
                ])
                ->validationMessages([
                    'regex' => 'URL YouTube tidak valid. Contoh: https://www.youtube.com/watch?v=XXXXXX',
                ]),

            // Deskripsi Singkat
            Forms\Components\Textarea::make('des_singkat')
                ->label('Deskripsi Singkat')
                ->placeholder('Tulis deskripsi singkat tentang acara...')
                ->columnSpanFull()
                ->helperText('Deskripsi singkat acara dalam beberapa kalimat.'),

            // Detail Acara
            Forms\Components\Textarea::make('detail_acara')
                ->label('Detail Acara')
                ->placeholder('Tuliskan detail lengkap tentang acara...')
                ->columnSpanFull()
                ->helperText('Jelaskan acara lebih detail, termasuk rundown atau informasi penting.'),
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
                Tables\Columns\TextColumn::make('judul')
                    ->searchable(),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Tanggal Acara')
                    ->date()
                    ->sortable(),
            Tables\Columns\TextColumn::make('approval_status') // unique name
                ->label('Approval Status')
                ->getStateUsing(fn($record) => $record->approval?->approve ? 'Approved' : 'Pending')
                ->badge()
                ->color(fn($state) => $state === 'Approved' ? 'success' : 'warning'),
                Tables\Columns\TextColumn::make('tanggal_akhir')
                    ->date()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('images.img1')
                    ->label('Image 1')
                    ->square(),

                Tables\Columns\ImageColumn::make('images.img2')
                    ->label('Image 2')
                    ->square(),

                Tables\Columns\ImageColumn::make('images.img3')
                    ->label('Image 3')
                    ->square(),

            // Show video as a clickable link
            // Show video as a clickable link
            Tables\Columns\TextColumn::make('images.video')
                ->label('Video'),
            Tables\Columns\ToggleColumn::make('approval.approve')
                ->label('Approved')->visible(fn() => auth()->user()->hasAnyRole(['admin', 'super_admin']))
                ->disabled(fn() => ! auth()->user()->hasAnyRole(['admin', 'super_admin']))
                ->updateStateUsing(function ($record, $state) {
                    if (! auth()->user()->hasAnyRole(['admin', 'super_admin'])) {
                        return; // ❌ Prevent normal users from changing it
                    }

                    $record->approval()->update([
                        'approve'     => $state,
                        'approved_by' => $state ? Auth::user()->id : null,
                    ]);
                }),

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
            // Tables\Actions\DeleteAction::make(),
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
        $user = auth()->user();

        // If user is admin, show all data
        if ($user->hasRole('super_admin')) { // If you’re using spatie/laravel-permission
            return parent::getEloquentQuery();
        }

        // Otherwise, only show the data created by this user
        return parent::getEloquentQuery()->where('owner', $user->id);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
            'view' => Pages\ViewArtikel::route('/{record}'), // ✅ add this

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
    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Artikel')
                    ->schema([
                        TextEntry::make('judul')->label('Judul'),

                        TextEntry::make('approval.approve')
                            ->label('Approval')
                            ->badge()
                            ->formatStateUsing(fn($state) => $state ? 'Approved' : 'Pending')
                            ->color(fn($state) => $state ? 'success' : 'warning'),
                    ])->columns(2),
                Section::make('Isi Artikel')
                    ->schema([
                        TextEntry::make('des_singkat')->label('deskripsi singkat'),
                        TextEntry::make('detail_acara')->label('content'),

                    ])->columns(1),

                Section::make('Media')
                    ->schema([
                        ImageEntry::make('images.img1')
                            ->label('Image 1')
                            ->disk('public')      // uses /storage URLs
                            ->square()
                            ->hidden(fn($record) => blank($record->images?->img1)),

                        ImageEntry::make('images.img2')
                            ->label('Image 2')
                            ->disk('public')
                            ->square()
                            ->hidden(fn($record) => blank($record->images?->img2)),

                        ImageEntry::make('images.img3')
                            ->label('Image 3')
                            ->disk('public')
                            ->square()
                            ->hidden(fn($record) => blank($record->images?->img3)),

                        TextEntry::make('images.video')
                            ->label('Video')
                            ->url(fn($record) => $record->images?->video
                                ? asset('storage/' . $record->images->video)
                                : null)
                            ->openUrlInNewTab()
                            ->visible(fn($record) => filled($record->images?->video)),
                    ])->columns(3),
            ]);
    }
}