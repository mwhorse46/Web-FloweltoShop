<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlowerCategory extends Model
{
    protected $table = 'flower_categories';

    protected $fillable = [
        'name', 'image',
    ];

    public function flowers() {
        return $this->hasMany(Flower::class, 'category_id', 'id');
    }
}
