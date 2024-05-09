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
                    'ATTR_NAME' => 'ITC7主機',
                ],
                [
                    'ID' => 2,
                    'ATTR_NAME' => 'ITC8主機',
                ],
                [
                    'ID' => 3,
                    'ATTR_NAME' => '公關機',
                ],
                [
                    'ID' => 4,
                    'ATTR_NAME' => '五合一支架',
                ],
                [
                    'ID' => 5,
                    'ATTR_NAME' => 'ITC7 RMA料件',
                ],
                [
                    'ID' => 6,
                    'ATTR_NAME' => 'ITC8 RMA料件',
                ],
                [
                    'ID' => 7,
                    'ATTR_NAME' => '販售用配件',
                ],
                [
                    'ID' => 8,
                    'ATTR_NAME' => '贈品',
                ],
                [
                    'ID' => 9,
                    'ATTR_NAME' => '包材',
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
