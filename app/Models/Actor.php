<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\PrimaryAsUuid;

class Actor extends Model
{
    use PrimaryAsUuid;

    public $incrementing = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';
}
