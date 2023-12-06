<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_model',
        'bid',
        'size',
        'nits',        
        'hz',
        'panel',
        'speaker',
        'resolution',
        'price'
        
    ];

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand','bid','id');
    }
}