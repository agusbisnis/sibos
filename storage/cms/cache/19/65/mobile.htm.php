<?php 
class Cms5513ca7232991_96472073Class extends \Cms\Classes\PageCode
{

public function onStart()
{
    if (Auth::check())
        return Redirect::to('mobile/home');
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

    $user = Auth::findUserByLogin(post('username'));
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

    return Redirect::to('mobile/home');
}

}
