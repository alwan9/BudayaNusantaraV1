<?php


namespace App\Filament\Widgets;

use App\Models\Artikel;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\Auth;

class ArtikelBarChart extends ChartWidget
{
    protected static ?string $heading = 'Artikel per Bulan (Bar Chart)';

    protected function getData(): array
    {
        $data = Artikel::selectRaw("MONTH(created_at) as bulan, COUNT(*) as jumlah")->where('owner',Auth::user()->id)
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->pluck('jumlah', 'bulan');

        $labels = [];
        $values = [];

        for ($i = 1; $i <= 12; $i++) {
            $labels[] = date("F", mktime(0, 0, 0, $i, 1));
            $values[] = $data[$i] ?? 0;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Artikel',
                    'data' => $values,
                    'backgroundColor' => 'rgba(255, 159, 64, 0.7)',
                    'borderColor' => 'rgba(255, 159, 64, 1)',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // 👈 jenis grafik
    }

    protected static ?string $maxHeight = '300px';
}
    