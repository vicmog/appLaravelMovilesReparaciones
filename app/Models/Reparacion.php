<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model
{
    use HasFactory;
    protected $table = 'table_reparacion';
    public $timestamps = false;
    protected $fillable = ['idMovil','descripcion_reparacion','precio_reparacion'];
    
    
    public function movil() {
             
         return $this->belongsTo('App\Models\Movil', 'idMovil');
         
    }
    
}
