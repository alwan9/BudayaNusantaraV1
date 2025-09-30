<?php

namespace App\Filament\Resources\LaporkanResource\Pages;

use App\Filament\Resources\LaporkanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditLaporkan extends EditRecord
{
    protected static string $resource = LaporkanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function mutateFormDataBeforeFill(array $data): array
    {
        $image = \App\Models\Dokumentasi::find($data['dokumentasi'] ?? null);
        //dd($image);
        if ($image) {
            $data['upload_img1'] = $image->img1;
            $data['upload_img2'] = $image->img2;
            $data['upload_img3'] = $image->img3;
            $data['upload_video'] = $image->video;
            $data['img'] = $image->id;
        }
        
        
        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $image = \App\Models\Dokumentasi::find($data['dokumentasi'] ?? null);

        if ($image) {
            if (!empty($data['upload_img1']) && $data['upload_img1'] !== $image->img1) {
                if (!empty($image->img1)) {
                    Storage::disk('public/dokumentasi/')->delete($image->img1);
                }
                $image->img1 = $data['upload_img1'];
            }

            if (!empty($data['upload_img2']) && $data['upload_img2'] !== $image->img2) {
                if (!empty($image->img2)) {
                    Storage::disk('public/dokumentasi/')->delete($image->img2);
                }
                $image->img2 = $data['upload_img2'];
            }

            if (!empty($data['upload_img3']) && $data['upload_img3'] !== $image->img3) {
                if (!empty($image->img3)) {
                    Storage::disk('public/dokumentasi/')->delete($image->img3);
                }
                $image->img3 = $data['upload_img3'];
            }

            if (!empty($data['upload_video']) && $data['upload_video'] !== $image->video) {
                if (!empty($image->video)) {
                    Storage::disk('public/dokumentasi/')->delete($image->video);
                }
                $image->video = $data['upload_video'];
            }

            $image->save(); // 👈 updates database
        }

        unset($data['upload_img1'], $data['upload_img2'], $data['upload_img3'], $data['upload_video']);

        return $data;
    }
}
