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
    public function monitor()
    {
        return $this->hasMany('App\Models\Monitor','bid');
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
