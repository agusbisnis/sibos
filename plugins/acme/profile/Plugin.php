<?php namespace Acme\Profile;

use System\Classes\PluginBase;
use Rainlab\User\Models\User as UserModel;
use Rainlab\User\Controllers\Users as UsersController;
use Acme\Profile\Models\Profile as ProfileModel;
/**
 * Profile Plugin Information File
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
            'name'        => 'Profile',
            'description' => 'No description provided yet...',
            'author'      => 'Acme',
            'icon'        => 'icon-leaf'
        ];
    }

    public function boot()
    {
        UserModel::extend(function($model){
            $model->hasOne['profile'] = ['Acme\Profile\Models\Profile'];
        });

        UsersController::extendFormFields(function($form, $model, $context) {

            if (!$model instanceof UserModel)
                return;

            if (!$model->exists)
                return;

            ProfileModel::getFromUser($model);

            $form->addTabFields([
                
                    'profile[headline]' => [
                        'label' => 'Headline',
                        'tab' => 'Profile',
                     ],   
                    'profile[about_me]' => [
                        'label' => 'About Me',
                        'tab' => 'Profile',
                        'type' => 'textarea',
                    ],
                    'profile[interests]' => [
                        'label' => 'interest',
                        'tab' => 'Profile',
                        'type' => 'textarea',
                    ],
                    'profile[books]' => [
                        'label' => 'books',
                        'tab' => 'Profile',
                        'type' => 'textarea',
                    ],
                    'profile[music]' => [
                        'label' => 'music',
                        'tab' => 'Profile',
                        'type' => 'textarea',
                    ]              
                ]);
        });
    }
}
