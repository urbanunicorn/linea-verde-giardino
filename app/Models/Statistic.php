<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'visit_count'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
