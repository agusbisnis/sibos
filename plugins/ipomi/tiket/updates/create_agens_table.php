<?php namespace Ipomi\Tiket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateAgensTable extends Migration
{

    public function up()
    {
        Schema::create('ipomi_tiket_agens', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ipomi_tiket_agens');
    }

}
