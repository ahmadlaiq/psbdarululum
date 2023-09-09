<?php

namespace App\Exports;

use App\Models\Formulir;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormulirExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Formulir::all();
    }
}
