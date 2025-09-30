<?php

namespace App\Filament\Resources\ArtikelResource\Pages;

use App\Filament\Resources\ArtikelResource;
use App\Models\Approval;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateArtikel extends CreateRecord
{
    protected static string $resource = ArtikelResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
         $doc = \App\Models\Image::create([
            'img1'  => $data['upload_img1'] ?? null,
            'img2'  => $data['upload_img2'] ?? null,
            'img3'  => $data['upload_img3'] ?? null,
            'video' => $data['upload_video'] ?? null,
            'jenis' => "artikel",

        ]);     

        $data['img'] = $doc->id;
        $data['owner'] = Auth::user()->id;

        // Remove temporary upload fields so they aren't saved to Artikel table
        unset($data['upload_img1'], $data['upload_img2'], $data['upload_img3'], $data['upload_video']);

        
    return $data;
    }
     protected function afterCreate(): void
    {
        Approval::create([
            'artikel_id'  => $this->record->id,  // the artikel id
            'approve'     => 0,                  // default: not approved yet
            'approved_by' => null,               // admin not approved yet
        ]);
    }
}
