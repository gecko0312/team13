<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'bname',
        'location',
        'brand_time'
        
    ];
    public function monitor()
    {
        return $this->hasMany('App\Models\Monitor','bid');
    }
    public function delete()
    {
        $this->monitor()->delete();
        return parent::delete();
    }
    public function location($location)
    {
        $query->where('location', '=', $location);
    }
}
