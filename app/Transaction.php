<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction- Transacciones de la aplicacion
 * @package App
 */
class Transaction extends Model
{
    //
    protected $fillable=['quantity','buyer_id','product_id'];
}
