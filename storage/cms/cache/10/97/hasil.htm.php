<?php 
class Cms5514b4d7cffec_1960101834Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['currentPage'] = 'kelurahan';
     $asal=$this['asal']=Ipomi\Tiket\Models\Kota::find(intval(Input::get('dari')));
     $tujuan=$this['tujuan']=Ipomi\Tiket\Models\Kota::find(intval(Input::get('ke')));
    //$user = Auth::getUser();
    $tgl=date("Y-m-d",strtotime(Input::get('pergi')));
    $this['jmlpenumpang']=intval(Input::get('jmlpenumpang'));

    $this['trayeks'] = Ipomi\Tiket\Models\Trayek::get()->where('id_asal', intval(Input::get('dari')))
                                                      ->where('id_tujuan', intval(Input::get('ke')))
                                                      ->where('tgl', $tgl);
    $user = $this['user'] = Auth::getUser();                                                  
    $agen = $this['agen'] = Ipomi\Tiket\Models\Agen::where('user_id', '=', $user->id)->first();
    //$this['kecamatans']= Sibos\Struk\Models\Kecamatan::get();
   // $this['ingredients'] = Responsiv\DishSmith\Models\Dish::mergeIngredients($dishes);
}



}
