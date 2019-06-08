<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Модель вид трансопрта
 * @package App\Models
 */
class TransportType extends Model
{
    /**
     * Получить все транспортные средства данного типа
     * @return HasMany
     */
    public function transports()
    {
        return $this->hasMany(Transport::class);
    }
}
