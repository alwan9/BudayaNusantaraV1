<?php

namespace App\Filament\Resources\ProfileResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

class ProfileInfoWidget extends Widget
{
    protected static string $view = 'filament.resources.profile-resource.widgets.profile-info-widget';
      protected function getViewData(): array
    {
        $user = Auth::user();
        return [
            'user' => $user,
            'role' => $user->getRoleNames()->first() ?? 'User',
            'joinedAt' => $user->created_at->translatedFormat('d F Y'),
            'totalArtikel' => $user->artikel()->count(), // jika ada relasi artikel
        ];
    }
}