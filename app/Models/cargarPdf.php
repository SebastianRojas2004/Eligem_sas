<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cargarPdf extends Model
{
    protected $table='archivopdf';
    protected $primarKey = 'id_doc';

    public $timestamps=false;

    protected $fillable=[
        'nombre',
        'documento',
        'id_empleado'
    ];
}
