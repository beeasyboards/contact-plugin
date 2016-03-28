<?php namespace BeEasy\Contact;

use Backend;
use System\Classes\PluginBase;

/**
 * Contact Plugin Information File
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
            'name'        => 'Contact',
            'description' => 'Messages from the frontend contact form.',
            'author'      => 'Be Easy',
            'icon'        => 'icon-envelope-o'
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'contact' => [
                'label'       => 'Contact',
                'url'         => Backend::url('beeasy/contact/messages'),
                'icon'        => 'icon-envelope',
                'permissions' => ['beeasy.contact.*'],
                'order'       => 500,
            ],
        ];
    }
}
