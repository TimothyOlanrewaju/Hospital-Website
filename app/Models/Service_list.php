<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class Service_list extends Model
{
     protected $fillable=[
        'id',
        'service_name',
        'service_detail',
        'service_created_by',
        'user_id',
        'categories_id',
        'service_status',


    ];

     public function Service_list()
    {
        return $this->hasMany(Service_list::class,'category_id','id');
    }
}
