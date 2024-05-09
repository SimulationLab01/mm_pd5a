<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMCheckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_check', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('CHECK_NAME', 20);

            $table->primary('ID');
        });

        DB::table('m_check')->insert(
            array(
                [
                    'ID' => 1,
                    'CHECK_NAME' => '無',
                ],
                [
                    'ID' => 2,
                    'CHECK_NAME' => '正常',
                ],
                [
                    'ID' => 3,
                    'CHECK_NAME' => '損壞',
                ],
                [
                    'ID' => 4,
                    'CHECK_NAME' => '遺失',
                ],
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_check');
    }
}
