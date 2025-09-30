<?php

namespace App\Filament\Resources\YesResource\Widgets;

use App\Models\User;
use App\Models\Acara;
use App\Models\Artikel;
use Filament\Widgets\StatsOverviewWidget\Card;
// use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Illuminate\Support\Facades\Auth;

class StatistikOverview extends BaseWidget
{
    protected function getStats(): array
    {
        
        if(auth()->user()->hasRole("admin") ){
             // Ambil 5 acara terbaru
               return [
              Card::make('Total User', User::count())
                ->description('Jumlah pengguna terdaftar')
                ->descriptionIcon('heroicon-o-user-group')
                ->color('success'),

            Card::make('Total Artikel', Artikel::where("owner",Auth::user()->id)->count())
                ->description('Artikel yang sudah dipublish')
                ->descriptionIcon('heroicon-o-document-text')
                ->color('primary'),

            Card::make('Total Acara', Acara::where("owner",Auth::user()->id)->count())
                ->description('Jumlah acara budaya')
                ->descriptionIcon('heroicon-o-calendar-days')
                ->color('warning'),
        ];// Ambil 5 acara terbaru
            
        }
        else if( auth()->user()->hasRole("user")){
             return [
               

            Card::make('Total Artikel', Artikel::where("owner",Auth::user()->id)->count())
                ->description('Artikel yang sudah dipublish')
                ->descriptionIcon('heroicon-o-document-text')
                ->color('primary'),

          
        ]; // Ambil 5 acara terbaru

        }
        else{
            
             return [
              Card::make('Total User', User::count())
                ->description('Jumlah pengguna terdaftar')
                ->descriptionIcon('heroicon-o-user-group')
                ->color('success'),

            Card::make('Total Artikel', Artikel::count())
                ->description('Artikel yang sudah dipublish')
                ->descriptionIcon('heroicon-o-document-text')
                ->color('primary'),

            Card::make('Total Acara', Acara::count())
                ->description('Jumlah acara budaya')
                ->descriptionIcon('heroicon-o-calendar-days')
                ->color('warning'),
        ];// Ambil 5 acara terbaru
        }


        return [
              Card::make('Total User', User::count())
                ->description('Jumlah pengguna terdaftar')
                ->descriptionIcon('heroicon-o-user-group')
                ->color('success'),

            Card::make('Total Artikel', Artikel::count())
                ->description('Artikel yang sudah dipublish')
                ->descriptionIcon('heroicon-o-document-text')
                ->color('primary'),

            Card::make('Total Acara', Acara::count())
                ->description('Jumlah acara budaya')
                ->descriptionIcon('heroicon-o-calendar-days')
                ->color('warning'),
        ];
    }
}