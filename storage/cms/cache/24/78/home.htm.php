<?php 
class Cms5513c9f805ec4_1141352625Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['currentPage'] = 'kelurahan';

    $user = $this['user'] = Auth::getUser();
    $this['kotas']= Ipomi\Tiket\Models\Kota::get();
    $this['pesan']= Ipomi\Tiket\Models\Pesan::where('user_id', '=', $user->id)->count();
    $this['pesans']= Db::select('SELECT SUM(a.bayar) as jumlah FROM ipomi_tiket_pesans a, users b, ipomi_tiket_agens c WHERE a.agen_id=c.id AND c.user_id=b.id AND b.id=?', [$user->id])[0];
    
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
