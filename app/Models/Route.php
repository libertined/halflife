<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Модель маршрутов
 * @package App\Models
 */
class Route extends Model
{
    /**
     * Населенный пункт маршрута
     * @return HasOne
     */
    public function city()
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }

    /**
     * Тариф маршрута
     * @return HasOne
     */
    public function tariff()
    {
        return $this->hasOne(Tariff::class, 'id', 'tariff_id');
    }

    /**
     * Транспортные средства на маршруте
     * @return HasMany
     */
    public function transports()
    {
        return $this->hasMany(Transport::class);
    }
}
