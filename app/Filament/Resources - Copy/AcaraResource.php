<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AcaraResource\Pages;
use App\Filament\Resources\AcaraResource\RelationManagers;
use App\Models\Acara;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class AcaraResource extends Resource
{
    protected static ?string $model = Acara::class;

    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                ->label('Judul Acara')
                ->placeholder('Masukkan judul acara')
                    ->required()
                ->maxLength(255)
                ->helperText('Judul acara harus singkat dan jelas.'),

            Forms\Components\DatePicker::make('tanggal_mulai')
                ->label('Tanggal Mulai')
                ->placeholder('Pilih tanggal mulai acara')
                ->required()
                ->helperText('Tanggal mulai tidak boleh sebelum hari ini.')
                ->minDate(today()), // ✅ Prevent past dates

            Forms\Components\DatePicker::make('tanggal_akhir')
                ->label('Tanggal Akhir')
                ->placeholder('Pilih tanggal akhir acara')
                ->required()
                ->helperText('Tanggal akhir tidak boleh sebelum tanggal mulai.')
                ->afterOrEqual('created_at'), // ✅ Prevent ending before start

            Forms\Components\Hidden::make('owner'),
            Forms\Components\Hidden::make('img'),

            // Upload Image 1
            Forms\Components\FileUpload::make('upload_img1')
                ->label('Gambar Utama')
                    ->directory('images')
                ->image()
                ->image()->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/jfif'])

                ->maxSize(2048)
                ->nullable()
                ->preserveFilenames(false)
                ->visibility('public')
                ->helperText('Unggah gambar utama acara. Maksimal 2MB.'),

            // Upload Image 2
            Forms\Components\FileUpload::make('upload_img2')
                ->label('Gambar Tambahan 1')
                    ->directory('images')
                ->image()
                ->image()->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/jfif'])

                ->maxSize(2048)
                ->nullable()
                ->preserveFilenames(false)
                ->visibility('public')
                ->helperText('Opsional: Gambar tambahan pertama.'),

            // Upload Image 3
            Forms\Components\FileUpload::make('upload_img3')
                ->label('Gambar Tambahan 2')
                    ->directory('images')
                ->image()
                ->image()->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/jfif'])

                ->maxSize(2048)
                ->nullable()
                ->preserveFilenames(false)
                ->visibility('public')
                ->helperText('Opsional: Gambar tambahan kedua.'),

            Forms\Components\TextInput::make('lokasi')
                ->label('Lokasi Acara')
                ->placeholder('Contoh: Gedung Kesenian Jakarta')
                ->required()
                ->maxLength(255)
                ->helperText('Masukkan lokasi lengkap acara.'),

            Forms\Components\Textarea::make('des_singkat')
                ->label('Deskripsi Singkat')
                ->placeholder('Tulis deskripsi singkat acara...')
                ->columnSpanFull()
                ->helperText('Deskripsi singkat acara, maksimal beberapa kalimat.'),

            Forms\Components\Textarea::make('detail_acara')
                ->label('Detail Acara')
                ->placeholder('Tuliskan detail lengkap tentang acara...')
                ->columnSpanFull()
                ->helperText('Jelaskan acara lebih detail, termasuk rundown atau informasi penting.'),

            Forms\Components\TextInput::make('htm')
                ->label('Harga Tiket Masuk (HTM)')
                ->numeric()
                ->placeholder('Contoh: 50000')
                ->helperText('Masukkan harga tiket masuk dalam rupiah. Isi 0 jika gratis.'),

            Forms\Components\TextInput::make('no_panitia')
                ->label('Nomor Panitia')
                ->placeholder('Contoh: 081234567890')
                ->maxLength(255)
                ->helperText('Nomor kontak panitia yang bisa dihubungi.'),

            Forms\Components\Select::make('kategori_id')
                ->label('Kategori Acara')
                ->relationship('kategori', 'nama')
                ->searchable()
                ->preload()
                ->required()
                ->placeholder('Pilih kategori acara')
                ->helperText('Pilih kategori yang sesuai dengan acara ini.'),

            Forms\Components\TextInput::make('asal')
                ->label('Asal Daerah / Grup')
                ->placeholder('Contoh: Sanggar Seni Jawa Tengah')
                ->maxLength(255)
                ->helperText('Masukkan asal daerah atau grup penyelenggara.'),
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
                Tables\Columns\TextColumn::make('tanggal_mulai')
                    ->date()
                    ->sortable(),
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
            // Tables\Columns\TextColumn::make('images.video')
            //     ->label('Video')
            // ->url(fn($record) => $record->images?->video ? asset('storage/' . $record->images->video) : null)
            //     ->openUrlInNewTab(),

            Tables\Columns\TextColumn::make('lokasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('htm')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('no_panitia')
                    ->searchable(),
            Tables\Columns\TextColumn::make('kategori.nama')
                ->searchable(),
            Tables\Columns\TextColumn::make('asal')
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
            'index' => Pages\ListAcaras::route('/'),
            'create' => Pages\CreateAcara::route('/create'),
            'edit' => Pages\EditAcara::route('/{record}/edit'),

        ];
    }
}