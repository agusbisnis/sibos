<?php namespace Aff\GetHelp;

use System\Classes\PluginBase;

/**
 * GetHelp Plugin Information File
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
            'name'        => 'GetHelp',
            'description' => 'No description provided yet...',
            'author'      => 'Aff',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'Aff\GetHelp\Components\Post' => 'post'
        ];
    }

}
