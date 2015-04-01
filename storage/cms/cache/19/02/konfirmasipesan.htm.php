<?php 
class Cms5513ef236b224_1382532405Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['currentPage'] = 'konfirmasipesan';
    $trayek = $this['trayek']=Input::get('trayek');
    $jmlpenumpang = $this['jmlpenumpang']=Input::get('jmlpenumpang');
    $agen = $this['agen'] =Input::get('agen');
    $this['nama']=Input::get('nama');
    $this['alamat']=Input::get('alamat');
    $this['telp'] =Input::get('telp');
    $this['email'] =Input::get('email');


    $t = $this['t'] = Ipomi\Tiket\Models\Trayek::find(intval($trayek));
    $this['a'] = Ipomi\Tiket\Models\Agen::find(intval($agen));
    $this['asal']=Ipomi\Tiket\Models\Kota::find($t->id_asal);
    $this['tujuan']=Ipomi\Tiket\Models\Kota::find($t->id_tujuan);
    $this['total']=floatval($jmlpenumpang)*$t->harga;
}



}
