<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Collection;

/**
 * @property string secret
 */
class Transport extends Model
{
    /**
     * Дополнительно подгружаемые сущности
     * @var array
     */
    protected $with = [
        'route',
        'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'secret'
    ];

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

    /**
     * Информация о тарифе данного транспортного средства
     * @return Collection
     */
    public function getTariffs(): Collection
    {
        return $this->route->tariffs;
    }

    /**
     * Перегенерировать ключ проверка транспорта
     * (предпологается перегенерация ключа при выходе транспорта на маршрут).
     * @return string
     */
    public function reGenerateSecret(): string
    {
        $secretParts = [
            $this->id,
            now(),
        ];

        $secret = md5(join('', $secretParts));
        $this->secret = $secret;
        $this->save();

        return $secret;
    }

    /**
     * Получить уникальный секретный ключ
     * @return string
     */
    public function getSecret(): string
    {
        return $this->secret;
    }
}
