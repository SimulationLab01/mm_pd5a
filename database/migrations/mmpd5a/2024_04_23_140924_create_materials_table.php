<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->bigIncrements('ID');//流水號
            $table->string('NAME', 40);//資產名稱
            $table->Integer('ATTRIBUTE');//分類
            $table->string('ASSET_NUM', 255)->nullable();//倉管編號 varchar
            $table->string('PURCHASE_NUM', 100)->nullable();//資產編號 varchar
            $table->string('DESCRIPTION', 255)->nullable();//資產描述 varchar
            $table->string('SPEC', 255)->nullable();
            $table->string('NOTE', 255)->nullable();
            $table->string('USER', 40)->nullable();
            $table->string('USER_ID', 20)->nullable();//借用人工號 varchar
            $table->string('PURPOSE', 255)->nullable();
            $table->string('IMAGE', 255)->nullable();
            $table->Integer('STATUS');
            //照片URL varchar
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
