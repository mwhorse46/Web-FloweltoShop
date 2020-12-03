<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderTransaction extends Model
{
    protected $table = 'header_transactions';

    protected $fillable = [
        'date',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function items() {
        return $this->hasMany(DetailTransaction::class, 'transaction_id', 'id');
    }
}
