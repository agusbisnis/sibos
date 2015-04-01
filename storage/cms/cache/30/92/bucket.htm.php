<?php 
class Cms5513c247818ed_1269390388Class extends \Cms\Classes\LayoutCode
{

public function onStart()
{
    if (!Auth::check())
        return Redirect::to('/agen');

  
}



public function onLogout()
{
    Auth::logout();
    return Redirect::to('/agen');
}

}
