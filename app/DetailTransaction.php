<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    protected $table = 'detail_transactions';

    protected $fillable = [
        'image', 'qty', 'price',
        'transaction_id', 'flower_id',
    ];

    public function transaction() {
        return $this->belongsTo(HeaderTransaction::class);
    }

    public function flower() {
        return $this->belongsTo(Flower::class);
    }
}
