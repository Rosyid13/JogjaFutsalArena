<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_lap extends Model
{
    use HasFactory;
    public function arena() 
    {
        return $this->belongsTo('App\Models\Arena','arena_id', 'id');
    }
}
