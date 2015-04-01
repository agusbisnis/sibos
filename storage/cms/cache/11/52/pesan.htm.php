<?php 
class Cms5513c2a77633d_2082983160Class extends \Cms\Classes\PageCode
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
