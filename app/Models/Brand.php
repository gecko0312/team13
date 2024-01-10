<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'bname',
        'location',
        'brand_time'
        
    ];

    public function monitors(){
        return $this->hasMany('App\Models\Monitor','bid');
    }

    public function delete(){
        $this->monitors()->delete();
        return parent::delete();
    }

    public function scopeOver_year($query,$subYear){
        $over_year=new Carbon();
        $over_year=Carbon::now()->subYearsNoOverflow($subYear);
        return $query->where('brand_time','<',$over_year)->orderBy('brand_time','asc');
    }
    
    public function scopeAlllocation($query){
        return $query->select('location')->groupBy('location');
    }

    public function scopeLocation($query,$loc){
        return $query->where('location','=',$loc);
    }
}
