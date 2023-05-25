<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Support\Facades\DB;

class FormularioExport implements FromQuery
{
    use Exportable;

    protected $fechaInicio;
    protected $fechaFin;

    public function __construct($fechaInicio, $fechaFin)
    {
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
    }

    public function query()
    {
        return DB::table('formularios')
            ->whereBetween('created_at', [$this->fechaInicio, $this->fechaFin])
            ->orderBy('created_at', 'asc');
    }
}
