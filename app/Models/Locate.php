<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locate extends Model
{
    use HasFactory;

    public function ads() {
        
        return $this->hasMany('App\Models\Locate');
    }
}
