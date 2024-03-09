<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($brand) {
            foreach ($brand->products as $product) {
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
