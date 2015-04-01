<?php namespace Ipomi\Tiket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateKotasTable extends Migration
{

    public function up()
    {
        Schema::create('ipomi_tiket_kotas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ipomi_tiket_kotas');
    }

}
