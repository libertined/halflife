<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class City extends Model
{
    /**
     * Регион города
     * @return HasOne
     */
    public function region()
    {
        return $this->hasOne(Region::class, 'id', 'region_id');
    }
}
