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
                    'ATTR_NAME' => '監視器',
                ],
                [
                    'ID' => 2,
                    'ATTR_NAME' => '路由器',
                ],
                [
                    'ID' => 3,
                    'ATTR_NAME' => '平板',
                ],
                [
                    'ID' => 4,
                    'ATTR_NAME' => '手機、SIM Card',
                ],
                [
                    'ID' => 5,
                    'ATTR_NAME' => '行動電源',
                ],
                [
                    'ID' => 6,
                    'ATTR_NAME' => '撥放器',
                ],
                [
                    'ID' => 7,
                    'ATTR_NAME' => '生活用品',
                ],
                [
                    'ID' => 8,
                    'ATTR_NAME' => '行銷用品',
                ],
                [
                    'ID' => 9,
                    'ATTR_NAME' => '其他',
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
        Schema::dropIfExists('m_attribute');
    }
}
