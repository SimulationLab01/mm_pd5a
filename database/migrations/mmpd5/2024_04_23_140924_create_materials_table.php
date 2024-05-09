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
            $table->bigIncrements('ID');
            $table->Integer('ATTRIBUTE');
            $table->string('NAME', 40);
            $table->Integer('TYPE');
            $table->Integer('NUMBER')->nullable();
            $table->string('UNIT', 4)->nullable();
            $table->string('PLACE', 255)->nullable();
            $table->string('SPEC', 255)->nullable();
            $table->string('USER', 40)->nullable();
            $table->dateTime('RETURN_DATE')->nullable();
            $table->tinyInteger('RETURN_DELAY')->nullable();
            $table->double('PRICE')->nullable();
            $table->string('NOTE', 255)->nullable();
            $table->string('PURPOSE', 255)->nullable();
            $table->tinyInteger('OWNED')->nullable();
            $table->Integer('STATUS');
            $table->Integer('CHECK_STATUS')->nullable();
            $table->tinyInteger('CHECK_TAG')->nullable();
            $table->string('DETRACT_REASON', 255)->nullable();
            $table->dateTime('DETRACT_DATE')->nullable();
            $table->tinyInteger('DELETE_TAG')->nullable();
            $table->Integer('DELETE_COUNT')->nullable();
            $table->string('PURCHASE_NUM', 50)->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
            // $table->timestamps();
            // $table->softDeletes();
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
