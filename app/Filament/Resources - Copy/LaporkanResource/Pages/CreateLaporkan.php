<?php

namespace App\Filament\Resources\LaporkanResource\Pages;

use App\Filament\Resources\LaporkanResource;
use App\Models\Acara;
use App\Models\Dokumentasi;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateLaporkan extends CreateRecord
{
    protected static string $resource = LaporkanResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
      // ✅ Create Dokumentasi first
        $doc = Dokumentasi::create([
            'img1'  => $data['upload_img1'] ?? null,
            'img2'  => $data['upload_img2'] ?? null,
            'img3'  => $data['upload_img3'] ?? null,
            'video' => $data['upload_video'] ?? null,
        ]);

        // ✅ Find the Acara record safely
        $acara = Acara::find($data['acara_id']);

        if (!$acara) {
            // Stop creation if acara_id is invalid
            throw new \Exception("Acara not found. Please select a valid acara.");
        }

        // ✅ Set proper relational fields
        $data['dokumentasi'] = $doc->id;
        $data['acara_id'] = $acara->id;
        $data['user_acara_id'] = $acara->owner;
        $data['user_pelapor_id'] = Auth::id();

        // ✅ Remove temporary upload fields to avoid DB errors
        unset(
            $data['upload_img1'],
            $data['upload_img2'],
            $data['upload_img3'],
            $data['upload_video']
        );

        return $data;
    }
}
