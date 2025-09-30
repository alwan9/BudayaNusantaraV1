<?php

namespace App\Filament\Resources\AcaraResource\Pages;

use App\Filament\Resources\AcaraResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateAcara extends CreateRecord
{
    protected static string $resource = AcaraResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
         $doc = \App\Models\Image::create([
            'img1'  => $data['upload_img1'] ?? null,
            'img2'  => $data['upload_img2'] ?? null,
            'img3'  => $data['upload_img3'] ?? null,
        
            'jenis' => "acara",

        ]);     

        $data['img'] = $doc->id;
        $data['owner'] = Auth::user()->id;

        // Remove temporary upload fields so they aren't saved to Artikel table
        unset($data['upload_img1'], $data['upload_img2'], $data['upload_img3'], $data['upload_video']);

    return $data;
    }
}
