<?php

namespace App\Exports;

use App\Guests;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CsvExport implements FromCollection
{
    use Exportable;

    public function collection()
    {
        return Guests::all();
    }
}