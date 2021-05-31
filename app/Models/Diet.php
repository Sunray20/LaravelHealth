<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    use HasFactory;

    protected  $primaryKey = 'diet_id';

    public function Foods()
    {
        return $this->hasMany(Food::class);
    }
}
