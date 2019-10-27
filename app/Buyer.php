<?php

namespace App;


class Buyer extends User
{
    // 1:M
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }


}
