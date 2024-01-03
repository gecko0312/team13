<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function RandomProductModel(){
        $ENG_char='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $ENG_charLength=strlen($ENG_char);
        $fir_char='';
        $back_char='';
        $ProductModel='';//最終合成名稱

        //中間數字
        $productModel_num=rand(10,99);

        //前兩個英文字
        for( $i=0; $i<2; $i++){
            $fir_char.=$ENG_char[rand(0,$ENG_charLength-1)];
        }

        //後2~4個英文字
        for( $i=0; $i<rand(2,4); $i++){
            $back_char.=$ENG_char[rand(0,$ENG_charLength-1)];
        }
        $ProductModel=$fir_char.$productModel_num.$back_char;

        return  $ProductModel;
    }

    public function RandomSize(){
        $product_size=array(
            27,
            23.8,
            21.5,
            32,
            24
        );
        return $product_size[rand(0,count($product_size)-1)];
    }

    public function RandomHz(){
        $product_hz=array(
            75,
            60,
            100,
            170,
            165,
            240,
            250
        );
        return $product_hz[rand(0,count($product_hz)-1)];
    }

    public function RandomResolution(){
        $product_resolution=array(
            '1920*1080',
            '2560*1440',
            '3840*2160',
        );
        return $product_resolution[rand(0,count($product_resolution)-1)];
    }

    public function RandomNits(){
        $product_nits=array(
            250,
            200,
            300,
            350
        );
        return $product_nits[rand(0,count($product_nits)-1)];
    }

    public function RandomPanel(){
        $product_panel=array(
            'IPS',
            'VA',
            'MVA'
        );
        return $product_panel[rand(0,count($product_panel)-1)];
    }

    public function run()
    {
        for( $i=0 ; $i <30 ; $i++){
            $product_model=$this->RandomProductModel();
            $size=$this->RandomSize();
            $hz=$this->RandomHz();
            $resolution=$this->RandomResolution();
            $nits=$this->RandomNits();
            $panel=$this->RandomPanel();

            DB::table('monitors')->insert([
                'product_model' => $product_model,
                'bid' => rand(1,30),
                'size' => $size,
                'hz' => $hz,
                'resolution' => $resolution,
                'nits' => $nits,
                'panel' => $panel,
                'speaker' => rand(0,1),
                'price' => rand(2500,9000)
    
            ]);
        }
        
    }
}
