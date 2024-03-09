<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($category) {
            // Loop through all products that belong to the category
            foreach ($category->products as $product) {
                // Delete each product's image
                foreach (json_decode($product->image) as $image) {
                    if (file_exists(public_path('assets/product_image/' . $image))) {
                        unlink(public_path('assets/product_image/' . $image));
                    }
                }
            }
        });
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
