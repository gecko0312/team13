<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitors', function (Blueprint $table) {
            $table->id()->comment('編號(主鍵)');
            $table->string('product_model',100)->comment('產品型號');
            $table->foreignId('bid')->unsigned()->comment('廠牌(外部鍵)');
            $table->foreign('bid')->references('id')->on('brands')->onDelete('cascade');

            $table->double('size',3,1)->unsigned()->comment('尺寸');
            $table->integer('nits')->unsigned()->comment('亮度')->nullable();
            $table->integer('hz')->unsigned()->comment('更新率');
            $table->string('panel',100)->comment('面板')->nullable();
            $table->boolean('speaker')->comment('喇叭')->nullable();
            $table->string('resolution',100)->comment('解析度');
            $table->integer('price')->comment('價錢')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monitors');
    }
}
