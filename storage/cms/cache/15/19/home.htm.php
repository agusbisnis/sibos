<?php 
class Cms5513c131f2233_1096659973Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['currentPage'] = 'Beranda';

    //$user = Auth::getUser();
    $this['kotas']= Ipomi\Tiket\Models\Kota::get();
    
    
    //$this['kecamatans']= Sibos\Struk\Models\Kecamatan::get();
   // $this['ingredients'] = Responsiv\DishSmith\Models\Dish::mergeIngredients($dishes);
}



}
