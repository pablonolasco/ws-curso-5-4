<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category- Categorias
 * @package App
 */
class Category extends Model
{
    //
    protected $fillable=['name','description'];

    // N:M retorna una relacion de muchos a muchos
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
