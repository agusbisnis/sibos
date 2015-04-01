<?php namespace Sibos\Coba;

use System\Classes\PluginBase;

/**
 * Coba Plugin Information File
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
            'name'        => 'Coba',
            'description' => 'No description provided yet...',
            'author'      => 'Sibos',
            'icon'        => 'icon-leaf'
        ];
    }

}
