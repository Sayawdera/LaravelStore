<?php

namespace App\Models\Sublime;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $product_id)
 */
class Products extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany('App\Models\Sublime\ProductImage', 'product_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Sublime\Category', 'category_id');
    }
}
