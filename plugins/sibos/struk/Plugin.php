<?php namespace Sibos\Struk;

use System\Classes\PluginBase;

/**
 * Struk Plugin Information File
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
            'name'        => 'Struk',
            'description' => 'No description provided yet...',
            'author'      => 'Sibos',
            'icon'        => 'icon-leaf'
        ];
    }

}
