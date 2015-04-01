<?php namespace Ipomi\Bus\Components;

use Cms\Classes\ComponentBase;
use Ipomi\Bus\Models\Po;

class Armada extends ComponentBase
{

    /**
    * Nama Bus
    * @var string
    */
    public $nama;

    /**
    * array bus
    * @var array
    */
    public $bus;

    public function componentDetails()
    {
        return [
            'name'        => 'Armada Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        
        $this->nama = 'PO Ipomi';

        
        $this->bus = Po::get();
        
    }

    public function onAddItem()
    {
        $nama = post('nama');
        $po = new Po;
        $po->judul = $nama;
        $po->save();

        $this->page['bus'] = Po::get();//lists('judul');
    }

    function onDelete()
{
    if (!post('id'))
        return;

    //$user = Auth::getUser();
    $po = Po::find(post('id'));
    if ($po) {
        //$dish->ingredients()->detach();
        $po->delete();
    }

    //$this['dishes'] = Responsiv\DishSmith\Models\Dish::ofUser($user)->get();
}


}