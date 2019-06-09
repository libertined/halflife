<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Transaction
 * @property mixed created_at
 * @package App\Models
 */
class Transaction extends Model
{
    /**
     * Дополнительно подгружаемые сущности
     * @var array
     */
    protected $with = [
        'transport',
        'tariff'
    ];

    /**
     * Транспортное средство за которое совершена оплата.
     * @return HasOne
     */
    public function transport()
    {
        return $this->hasOne(Transport::class, 'id', 'transport_id');
    }

    /**
     * @return HasOne
     */
    public function tariff()
    {
        return $this->hasOne(Tariff::class, 'id', 'tariff_id');
    }

    /**
     * Сформировать уникальную сигнатуру подтверждения платежа
     * @return string
     */
    public function getSignature(): string
    {
        $parts = [
            $this->id,
            $this->created_at->format('c'),
            $this->transport->getSecret()
        ];

        return md5(join('::', $parts));
    }

    /**
     * Проверить валидность сигнатуры оплаты
     * @param string $signature
     * @return bool
     */
    public function isValidSignature(string $signature): bool
    {
        return $signature == $this->getSignature();
    }

}
