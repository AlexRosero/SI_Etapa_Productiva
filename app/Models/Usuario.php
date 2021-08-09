<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //Vincular MODEL - TABLE (Mysql)
    protected $table = "usuario";

    //Establecer la PK de la entidad (por defecto :ArtistId)
    protected $primaryKey = "IdUsuario";

    //Omitir Campos de AUDITORIA
    public $timestamps = false;

    //use HasFactory;

    //Relacion 1-M UsuarioRol
    public function usuarioRol(){
        //hasMany: parameter
        //1. Modelo a relacionar
        //2. FK del modelo pápa

        return $this -> hasMany('App\Models\UsuarioRol', 'id_usuario');
        return $this -> hasMany('App\Models\Rol', 'id');
    }//FIN UsuarioRol

    public function rol(){
        return $this -> hasMany('App\Models\Rol', 'id');
    }

}
