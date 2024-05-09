<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_attribute', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('ATTR_NAME', 20);

            $table->primary('ID');
        });
        DB::table('m_attribute')->insert(
            array(
                [
                    'ID' => 1,
                    'ATTR_NAME' => '貴重物品',
                ],
                [
                    'ID' => 2,
                    'ATTR_NAME' => '一般',
                ],
                [
                    'ID' => 3,
                    'ATTR_NAME' => '耗材',
                ]
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
        Schema::dropIfExists('m_attribute');
    }
}
