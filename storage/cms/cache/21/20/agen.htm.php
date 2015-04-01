<?php 
class Cms5510e1c0f2a9c_1166234014Class extends \Cms\Classes\LayoutCode
{

public function onStart()
{
    if (!Auth::check())
        return Redirect::to('/agen');

  //  $this['activeWeek'] = Session::get('dishsmith_active_week', 'A');
  //  $this['availableWeeks'] = Responsiv\DishSmith\Models\Dish::getWeeksForUser(Auth::getUser());

    // Reset the active week because it is no longer available
  //  if (!in_array($this['activeWeek'], $this['availableWeeks'])) {
   //     Session::put('dishsmith_active_week', 'A');
     //   $this['activeWeek'] = 'A';
    //}
      $user = $this['user'] = Auth::getUser();
}

//public function onChangeWeek()
//{
//    Session::put('dishsmith_active_week', post('week'));
//    return Redirect::to(URL::current());
//}

public function onLogout()
{
    Auth::logout();
    return Redirect::to('/agen');
}

}
