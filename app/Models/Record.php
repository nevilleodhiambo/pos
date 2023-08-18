<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'bprice',
        'sprice'
    ];
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function record(){
        return $this->belongsTo(Sale::class, 'product_id', 'id');
    }
    public function purchase(){
        return $this->hasMany(Purchase::class);
    }
}
