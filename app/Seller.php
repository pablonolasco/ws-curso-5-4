<?php

namespace App;


class Seller extends User
{
    // 1:M
    public function products(){
        return $this->hasMany(Product::class);
    }
}
