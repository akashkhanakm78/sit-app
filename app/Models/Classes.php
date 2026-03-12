<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    //
    protected $table ="classes";
    protected $fillable = [
                'name',
                'email',
                'dpt',
                'age',
                'roll',
                'phone'
    ];

}
