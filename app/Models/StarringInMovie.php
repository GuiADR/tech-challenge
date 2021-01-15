<?php

namespace App\Models;

use App\Models\Traits\PrimaryAsUuid;
use Illuminate\Database\Eloquent\Model;

class StarringInMovie extends Model
{
    use PrimaryAsUuid;

    public $incrementing = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $table = 'starringinmovies';

    public function movie()
    {
        return $this->hasOne(Movie::class, 'id', 'id_movie')->select('id', 'name');
    }
    public function genre()
    {
        return $this->hasOne(Genre::class, 'id', 'id_genre')->select('id', 'name');
    }
    public function actor()
    {
        return $this->hasOne(Actor::class, 'id', 'id_actor')->select('id', 'name');
    }
}
