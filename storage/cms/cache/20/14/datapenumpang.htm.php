<?php 
class Cms5513ef1c360df_1021536803Class extends \Cms\Classes\PageCode
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
