<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
/**
 * Модель инспектора
 * @package App\Models
 */
class Inspector extends User
{
    protected $table = 'inspectors';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone', 'firstname', 'lastname', 'surname', 'password'
    ];

    /**
     * Населенный пункт.
     *
     * @return HasOne
     */
    public function city()
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }
}
