<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

abstract class ApiModel extends Model
{
    protected $connection = 'api';
}
