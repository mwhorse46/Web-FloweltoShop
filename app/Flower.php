<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flower extends Model
{
    use SoftDeletes;

    protected $table = 'flowers';

    protected $fillable = [
        'name', 'price', 'description', 'image', 'deleted_at',
        'category_id',
    ];

    public function category() {
        return $this->belongsTo(FlowerCategory::class);
    }

    public function transactions() {
        return $this->hasMany(DetailTransaction::class, 'flower_id', 'id');
    }
}
