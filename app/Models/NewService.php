<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class NewService extends Model
{
     protected $fillable = [
        'id',
        'name',
        'description',
        'service_created_by',
        'user_id',
        'category_id',
        'service_status',
    ];
    public function newcategories()
    {
         
        return $this->belongsTo(Category::class);
    }
}
