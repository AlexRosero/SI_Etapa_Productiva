<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    //Vincular MODEL - TABLE (Mysql)
    protected $table = "instructor";

    //Establecer la PK de la entidad (por defecto :ArtistId)
    protected $primaryKey = "IdInstructor";

    //Omitir Campos de AUDITORIA
    public $timestamps = false;

    //use HasFactory;
}
