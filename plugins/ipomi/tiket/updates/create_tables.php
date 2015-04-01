<?php namespace Ipomi\Tiket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTables extends Migration
{

    public function up()
    {
        Schema::create('ipomi_tiket_kotas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nama');
            $table->timestamps();
        });

        Schema::create('ipomi_tiket_pos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nama');
            $table->timestamps();
        });

        Schema::create('ipomi_tiket_buses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nama');
            $table->integer('id_po');
            $table->integer('jmlseat');
            $table->timestamps();
        });

        Schema::create('ipomi_tiket_trayeks', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_asal');
            $table->integer('id_tujuan');
             $table->integer('id_bus');
            $table->integer('id_po');
            $table->time('jamdatang');
            $table->time('jamtiba');
            $table->double('harga');
            $table->timestamps();
        });

        Schema::create('ipomi_tiket_agens', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nama');
            $table->string('alamat');
            $table->integer('id_po');
            $table->integer('id_kota');
            $table->timestamps();
        });

        Schema::create('ipomi_tiket_pesans', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_trayek');
            $table->integer('id_agen');
            $table->integer('id_user');
            $table->integer('jmlpenumpang');
            $table->double('bayar');
            $table->integer('status');
            $table->string('notiket')->nullable();
            $table->timestamps();
        });

        Schema::create('ipomi_tiket_detail_pesans', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nama');
            $table->string('notelp');
            $table->timestamps();
        });


    }

    public function down()
    {
        Schema::dropIfExists('ipomi_tiket_kotas');
        Schema::dropIfExists('ipomi_tiket_pos');
        Schema::dropIfExists('ipomi_tiket_buses');
        Schema::dropIfExists('ipomi_tiket_trayeks');
        Schema::dropIfExists('ipomi_tiket_pesans');
        Schema::dropIfExists('ipomi_tiket_detail_pesans');
        Schema::dropIfExists('ipomi_tiket_agens');
    }

}