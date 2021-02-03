<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movil extends Model
{
    use HasFactory;
    protected $table = 'table_movil';
    public $timestamps = false;
    protected $fillable = ['url','marca','modelo','descripcion_movil','precio_movil','numero_reparaciones'];
    
    
    public function reparaciones() {
             
         return $this->hasMany('App\Models\Reparacion', 'idMovil');
         
    }
}
