<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product- Producto
 * @package App
 */
class Product extends Model
{
    // constantes que serviran para utilizarlas en el codigo en vez de los valores
    const PRODUCTO_DISPONIBLE='disponible';
    const PRODUCTO_NO_DISPONIBLE='no disponible';
    protected $fillable=['name','description','quantity','status','image','seller_id'];

    // funcion que retorna la disponibilidad el producto
    public function estaDisponible(){
        return $this->status==Product::PRODUCTO_DISPONIBLE;
    }

    // regresa una relacion de N:M deben ir esta relacion en ambas para regresar la relacion
    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    /*
     * relacion con Seller (vendedor) pertenece a
     */
    public function seller(){
        return $this->belongsTo(Seller::class);
    }

    // un producto puede tener muchas transacciones
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
}
