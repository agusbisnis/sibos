<?php namespace Sibos\Struk\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateBeritaDepansTable extends Migration
{

    public function up()
    {
        Schema::create('sibos_struk_berita_depans', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sibos_struk_berita_depans');
    }

}
