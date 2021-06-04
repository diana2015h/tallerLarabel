<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CbCurrency extends Model
{
  // Nombre de la tabla de la base de datos que definimos (Database table name).
  protected $table='cb_currency';


  protected $primaryKey = 'idcurrency';

  // Denimos los campos de la tabla directamente en la variable de tipo array $fillable
  protected $fillable =  array('currency', 'description', 'isactive', 'isocode', 'cursymbol', 'precisionstd',  'precisioncost', 'precisionprize');


  protected $hidden = ['created_at','updated_at'];
}
