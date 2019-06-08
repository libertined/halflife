<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transport extends Model
{
    /**
     * Маршрут
     * @return HasOne
     */
    public function route()
    {
        return $this->hasOne(Route::class, 'id', 'route_id');
    }

    /**
     * Вид транспорта
     * @return HasOne
     */
    public function type()
    {
        return $this->hasOne(TransportType::class, 'id', 'transport_type_id');
    }
}
