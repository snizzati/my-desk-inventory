<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;



class Inventory extends Model implements Auditable
{
    use HasFactory;
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;


public function user()
    {
        return $this->belongsTo(User::class);
    }

    //getter make sure title is always uppercase
    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }

    //setter
   public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }
}