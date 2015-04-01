<?php 
class Cms5513ee8282471_75111511Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['currentPage'] = 'kelurahan';
     $trayek=$this['trayek']=Ipomi\Tiket\Models\Trayek::find(intval(Input::get('trayek')));
     $this['jmlpenumpang']=intval(Input::get('jmlpenumpang'));
    $this['agens'] = Ipomi\Tiket\Models\Agen::get()->where('kota_id', $trayek->id_asal)
                                                      ->where('po_id', $trayek->bus->po_id);
    
}



}
