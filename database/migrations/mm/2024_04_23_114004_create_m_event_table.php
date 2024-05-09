<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_event', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('EVENT', 10);

            $table->primary('ID');
        });

        DB::table('m_event')->insert(
            array(
                [
                    'ID' => 1,
                    'EVENT' => '新增',
                ],
                [
                    'ID' => 2,
                    'EVENT' => '修改',
                ],
                [
                    'ID' => 3,
                    'EVENT' => '刪除',
                ],
                [
                    'ID' => 4,
                    'EVENT' => '借用',
                ],
                [
                    'ID' => 5,
                    'EVENT' => '歸還',
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
        Schema::dropIfExists('m_event');
    }
}
