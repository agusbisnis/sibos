<?php 
class Cms5513ca7636126_828784569Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['currentPage'] = 'kelurahan';

    //$user = Auth::getUser();
    $this['kotas']= Ipomi\Tiket\Models\Kota::get();
    
    
    //$this['kecamatans']= Sibos\Struk\Models\Kecamatan::get();
   // $this['ingredients'] = Responsiv\DishSmith\Models\Dish::mergeIngredients($dishes);
}
public function onTrayek()
{
    

    $this['trayeks'] = Ipomi\Tiket\Models\Trayek::get()->where('id_asal', intval(post('dari')))
                                                      ->where('id_tujuan', intval(post('ke')));
    
    
}
public function onAgen()
{
    

    $this['agens'] = Ipomi\Tiket\Models\Agen::get();
    
    
}
public function onNew()
{
    $kelurahan = new Sibos\Struk\Models\Kelurahan;
    $this['kecamatans'] = Sibos\Struk\Models\Kecamatan::get();
    $this['sessionKey'] = post('session_key', uniqid());

    
}

}
