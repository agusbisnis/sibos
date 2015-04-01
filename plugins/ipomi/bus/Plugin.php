<?php namespace Ipomi\Bus;

use System\Classes\PluginBase;

/**
 * Bus Plugin Information File
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
            'name'        => 'Bus',
            'description' => 'Manajemen Bus Ipomi',
            'author'      => 'Ipomi',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
        {
            return [
                    'Ipomi\Bus\Components\BusList' => 'busList',
                    'Ipomi\Bus\Components\Armada' => 'daftarArmada'
            ];
        }

}
