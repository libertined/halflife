<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
     * Тарифы маршрута
     * @return BelongsToMany
     */
    public function tariffs()
    {
        return $this->belongsToMany(Tariff::class, 'routes_tariffs', 'route_id', 'tariff_id');
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
