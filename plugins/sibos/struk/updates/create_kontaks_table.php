<?php namespace Sibos\Struk\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateKontaksTable extends Migration
{

    public function up()
    {
        Schema::create('sibos_struk_kontaks', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sibos_struk_kontaks');
    }

}
