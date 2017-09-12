<?php namespace SuccessiveSoftware\Paypal;

use System\Classes\PluginBase;
use Backend;
class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Paypal',
            'description' => 'Payment through paypal.',
            'author'      => 'SuccessiveSoftware',
            'icon'        => 'icon-sun-o'
        ];
    }

    public function registerComponents()
    {
        return [
           '\SuccessiveSoftware\Paypal\Components\Paypal' => 'paypal',
            '\SuccessiveSoftware\Paypal\Components\Paypalorder' => 'paypalorder'
        ];
    }
    
    public function registerSettings()
    {
        return [
            'orders' => [
                'label'       => 'All Orders',
                'description' => 'Configure available orders.',
                'icon'        => 'icon-usd',
                'url'         => Backend::url('successivesoftware/paypal/orders'),
                'category'    => 'Paypal',
                'order'       => 500,

            ],
            'settings' => [
                'label'       => 'Paypal Settings',
                'description' => 'Enter your paypal settings here.',
                'icon'        => 'icon-cog',
                'category'    => 'Paypal',
                'class'       => 'SuccessiveSoftware\Paypal\Models\Settings',
                'order'       => 510,
                'permissions' => ['successivesoftware.paypal.access_settings']
            ]
        ];
    }
    
    public function registerPermissions()
    {
        return [
            'successivesoftware.paypal.access_settings' => ['tab' => 'settings', 'label' => 'Settings'],
        ];
    }
    
}
