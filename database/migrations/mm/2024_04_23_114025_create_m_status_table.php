<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_status', function (Blueprint $table) {
            $table->integer('ID');
            $table->string('STATUS_NAME', 20);

            $table->primary('ID');
        });

        DB::table('m_status')->insert(
            array(
                [
                    'ID' => 1,
                    'STATUS_NAME' => '可使用',
                ],
                [
                    'ID' => 2,
                    'STATUS_NAME' => '使用中',
                ],
                [
                    'ID' => 3,
                    'STATUS_NAME' => '仍有存量',
                ],
                [
                    'ID' => 4,
                    'STATUS_NAME' => '待補充',
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
        Schema::dropIfExists('m_status');
    }
}
