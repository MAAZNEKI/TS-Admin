<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Contact;

class ContactsCountWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Contacts', Contact::count()),
        ];
    }
}
