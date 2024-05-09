<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_TypeEntity extends Model
{
    protected $table = 'm_type';
    protected $primaryKey = 'ID';

    public function materials()
    {
        return $this->hasMany("App/Models/MaterialsEntity");
    }
}
