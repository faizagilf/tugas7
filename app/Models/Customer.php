<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function rentals()
    {
        return $this->belongsToMany('App\Models\Rental')->withTimestamps();
    }
}
