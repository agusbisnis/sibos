<?php 
class Cms5513e5b34c91a_1443067967Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['currentPage'] = 'kelurahan';

    //$user = Auth::getUser();
    $this['kotas']= Ipomi\Tiket\Models\Kota::get();
    
    
    //$this['kecamatans']= Sibos\Struk\Models\Kecamatan::get();
   // $this['ingredients'] = Responsiv\DishSmith\Models\Dish::mergeIngredients($dishes);
}



}
