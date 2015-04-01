<?php namespace Ipomi\Bus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateBusesTable extends Migration
{

    public function up()
    {
        Schema::create('ipomi_bus_buses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
             $table->string('nama')->nullable();
            $table->Boolean('aktif')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ipomi_bus_buses');
    }

}
