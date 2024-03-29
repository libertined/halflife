<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    /**
     * Города региона
     * @return HasMany
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
