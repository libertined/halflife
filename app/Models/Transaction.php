<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction extends Model
{
    /**
     * Транспортное средство за которое совершена оплата.
     * @return HasOne
     */
    public function transport()
    {
        return $this->hasOne(Transport::class, 'id', 'transport_id');
    }
}
