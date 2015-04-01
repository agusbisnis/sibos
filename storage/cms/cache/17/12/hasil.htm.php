<?php 
class Cms5513e92f72e7e_246527383Class extends \Cms\Classes\PageCode
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
    //$this['kecamatans']= Sibos\Struk\Models\Kecamatan::get();
   // $this['ingredients'] = Responsiv\DishSmith\Models\Dish::mergeIngredients($dishes);
}



}
