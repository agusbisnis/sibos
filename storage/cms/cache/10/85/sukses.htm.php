<?php 
class Cms5513ef3f69155_1981948749Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['currentPage'] = 'Sukses';
    
        $trayek = Input::get('trayek');
        $agen = Input::get('agen');
        $user = Auth::getUser();

        $pesan = new Ipomi\Tiket\Models\Pesan;
        $pesan->trayek_id = intval($trayek);
        $pesan->agen_id = intval($agen);
        $pesan->user_id = $user->id;
        $pesan->jmlpenumpang = intval(Input::get('jmlpenumpang'));
        $pesan->bayar = floatval(Input::get('bayar'));
        $pesan->status = 1;

        $notiket = $this['notiket'] = "99999".$trayek.$agen.strval($user->id);

        $pesan->notiket = $notiket;
        $pesan->namapemesan = Input::get('nama');
        $pesan->telppemesan = Input::get('telp');
        $pesan->alamatpemesan = Input::get('alamat');
        $pesan->emailpemesan = Input::get('email');

        $t = $this['t'] = Ipomi\Tiket\Models\Trayek::find(intval($trayek));

        $pesan->hargasatuan = floatval($t->harga);
        $pesan->save();
        
       
}

}
