<?php namespace Ipomi\Tiket;

use System\Classes\PluginBase;
use Rainlab\User\Models\User as UserModel;

use Ipomi\Tiket\Models\Profile as ProfileModel;
/**
 * Tiket Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Tiket',
            'description' => 'No description provided yet...',
            'author'      => 'Ipomi',
            'icon'        => 'icon-leaf'
        ];
    }

    public function boot()
    {
        UserModel::extend(function($model){
            $model->hasOne['profile'] = ['Ipomi\Tiket\Models\Profile'];
        });

    }
}
