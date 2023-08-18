<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = [
        'pieces',
        'quantity_id',
        'date',
    ];
    public function records(){
        return $this->hasMany(Record::class);
    }
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function stock(){
        return $this->belongsTo(Stock::class, 'quantity_id');
    }
   
}