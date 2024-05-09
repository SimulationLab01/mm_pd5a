<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_history', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->bigInteger('M_ID')->nullable();
            $table->Integer('EVENT')->nullable();
            $table->string('WHO', 20)->nullable();
            $table->string('PURPOSE', 20)->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_history');
    }
}
