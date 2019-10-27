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
    /*
     * relacion con Comprador (comprador) pertenece a
     */
    public function buyer(){
        return $this->belongsTo(Buyer::class);
    }
    /*
     * relacion con Product (producto) pertenece a
     */
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
