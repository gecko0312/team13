<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function RandombrandsName(){
        $length=rand(3,10);
        $ENG_char='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $ENG_charLength=strlen($ENG_char);
        $brandsName='';
        for ( $i=0 ; $i <$length ; $i++ ){
            $brandsName.=$ENG_char[rand(0,$ENG_charLength-1)];
        }
        return $brandsName;
    }

    public function RandombrandsLocation(){
        $country=array(
            '台灣',
            '美國',
            '荷蘭',
            '日本',
            '韓國',
            '德國',
            '中國',
            '新加坡',
            '瑞典',
            '英國',
        );
        return $country[rand(0,count($country)-1)];
    }


    

    public function run()
    {
        for ($i=0;$i<30;$i++){
            $bname=$this->RandombrandsName();
            $location=$this->RandombrandsLocation();
            $year=Carbon::now()->year;

            DB::table('brands')->insert([
                'bname' => $bname,
                'location' => $location,
                'brand_time'=>$year-rand(40,100)
            ]);
        }
        
    }
}
