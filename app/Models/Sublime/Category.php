<?php

namespace App\Models\Sublime;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany('App\Models\Sublime\Products', 'category_id');
    }
}
