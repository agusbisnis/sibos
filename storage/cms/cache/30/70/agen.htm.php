<?php 
class Cms5513c24308a54_1693285262Class extends \Cms\Classes\PageCode
{

public function onStart()
{
    if (Auth::check()) {
       // return Redirect::to('agen/home');
            $user = $this['user'] = Auth::getUser();
            $agen = Ipomi\Tiket\Models\Agen::where('user_id', '=', $user->id)->first();
            if (!$agen) {
                Flash::error('Salah Masuk Cuy');
            } else {
                return Redirect::to('agen/home');
            }
    }
}

public function onEnter()
{
   $rules = [
        'username'    => 'required|min:2|max:64',
        'password' => 'required|min:2'
    ];

    $validation = Validator::make(post(), $rules);
    if ($validation->fails())
        throw new October\Rain\Support\ValidationException($validation);

    //$user = Auth::findUserByLogin(post('username'));
    
   /*  if (!$user) {
        // Register user
        $user = Auth::register([
            'username' => post('username'),
            'password_confirmation' => post('password'),
            'password' => post('password')
        ], true);
    }
*/
    // Authenticate user
    $user = Auth::authenticate([
        'username' => post('username'),
        'password' => post('password')
    ], true);

    //$user = $this['user'] = Auth::getUser();

    $agen = Ipomi\Tiket\Models\Agen::where('user_id', '=', $user->id)->first();
    if (!$agen) {
       Flash::error('Error saving settings');
    } else {
       return Redirect::to('agen/home');
    }
}

}
