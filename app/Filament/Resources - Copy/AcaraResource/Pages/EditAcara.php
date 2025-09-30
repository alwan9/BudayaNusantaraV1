<?php

namespace App\Filament\Resources\AcaraResource\Pages;

use App\Filament\Resources\AcaraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class EditAcara extends EditRecord
{
    protected static string $resource = AcaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function mutateFormDataBeforeFill(array $data): array
    {
        $image = \App\Models\Image::find($data['img'] ?? null);
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
        $image = \App\Models\Image::find($data['img'] ?? null);

        if ($image) {
            if (!empty($data['upload_img1']) && $data['upload_img1'] !== $image->img1) {
                if (!empty($image->img1)) {
                    Storage::disk('public')->delete($image->img1);
                }
                $image->img1 = $data['upload_img1'];
            }

            if (!empty($data['upload_img2']) && $data['upload_img2'] !== $image->img2) {
                if (!empty($image->img2)) {
                    Storage::disk('public')->delete($image->img2);
                }
                $image->img2 = $data['upload_img2'];
            }

            if (!empty($data['upload_img3']) && $data['upload_img3'] !== $image->img3) {
                if (!empty($image->img3)) {
                    Storage::disk('public')->delete($image->img3);
                }
                $image->img3 = $data['upload_img3'];
            }

         

            $image->save(); // 👈 updates database
        }

        unset($data['upload_img1'], $data['upload_img2'], $data['upload_img3'], $data['upload_video']);

        return $data;
    }


}
