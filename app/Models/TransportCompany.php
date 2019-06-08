<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TransportCompany extends Model
{
    /**
     * Получить маршруты обслуживаемые даной транспортной компанией
     * @return BelongsToMany
     */
    public function routes()
    {
        return $this->belongsToMany(Route::class, 'transport_companies_routes', 'transport_company_id', 'route_id');
    }
}
