<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_type', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('TYPE_NAME', 40);

            $table->primary('ID');
        });
        DB::table('m_type')->insert(
            array(
                [
                    'ID' => 1,
                    'TYPE_NAME' => '全新品',
                ],
                [
                    'ID' => 2,
                    'TYPE_NAME' => '整新品',
                ],
                [
                    'ID' => 3,
                    'TYPE_NAME' => '待維修',
                ],
                [
                    'ID' => 4,
                    'TYPE_NAME' => '報廢',
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
        Schema::dropIfExists('m_type');
    }
}
