<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategory_id', 'title', 'description', 'price', 'brand', 
        'dimension', 'weight', 'is_on_sale', 'discount', 
        'sale_start_date', 'sale_end_date', 'is_visible'
    ];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function statistics()
    {
        return $this->hasOne(Statistic::class);
    }
}
