<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FlowerCategory extends Model
{
    use SoftDeletes;

    protected $table = 'flower_categories';

    protected $fillable = [
        'name', 'image',
    ];

    public function flowers() {
        return $this->hasMany(Flower::class, 'category_id', 'id');
    }
}
