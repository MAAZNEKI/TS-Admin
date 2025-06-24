<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Portfolio;

class PortfolioCountWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            stat::make('Portfolios', Portfolio::count()),
        ];
    }
}
