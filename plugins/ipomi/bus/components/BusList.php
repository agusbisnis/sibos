<?php namespace Ipomi\Bus\Components;

use Cms\Classes\ComponentBase;
use Ipomi\Bus\Models\Bus;

class BusList extends ComponentBase
{

    /**
    * Nama Bus
    * @var string
    */
    public $tag;

    /**
    * array nama
    * @var array
    */
    public $nama;


    public function componentDetails()
    {
        return [
            'name'        => 'BusList Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function init()
    {
        //pada waktu pertama jalan, termasuk AJAX events

    }

    public function onRun()
    {
        //Tidak akan menjalankan event AJAX

        // {{ busList.tag }}
        $this->tag = 'Agramas';

        // {{ % set tag=busList.tag % }}

        // $this->page['tag'] = 'Agramas';

        $this->nama = Bus::lists('nama');
        // [
        //    'Agramas',
        //    'Bejeu',
        //    'Sinar Jaya'
        // ];
    }

    public function onAddItem()
    {
        $nama = post('nama');
        $bus = new Bus;
        $bus->nama = $nama;
        $bus->save();

        $this->page['bus'] = Bus::lists('nama');
    }
}