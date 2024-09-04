<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Serve;

class Category extends Model
{


    public function serves()
    {
        
        return $this->hasMany(Serve::class);
    }
}
