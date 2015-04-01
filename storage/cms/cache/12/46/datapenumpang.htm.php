<?php 
class Cms550d4aa6a8792_794444379Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['currentPage'] = 'datapenumpang';
    $this['trayek']=Input::get('trayek');
    $this['jmlpenumpang']=Input::get('jmlpenumpang');
    $this['agen'] =Input::get('agen');
    $this['user'] = Auth::getUser();
   
}



}
