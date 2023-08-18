<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function record(){
        return $this->hasMany(Record::class);
    }
    public function sale(){
        return $this->hasMany(Sale::class);
    }
    public function stock(){
        return $this->hasMany(Stock::class);
    }
    
}
