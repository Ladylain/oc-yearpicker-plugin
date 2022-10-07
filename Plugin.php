<?php namespace LucasPalomba\YearPicker;

use Event;
use System\Classes\PluginBase;
use System\Classes\PluginManager;
/**
 * Plugin Information File
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
            'name'        => 'YearPicker',
            'description' => 'Add a Year Picker form widget',
            'author'      => 'LucasPalomba',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {

        $properties = [
            'minYear' => [
                'title' => 'Min. Year',
                'type' => 'string'
            ],
            'maxYear' => [
                'title' => 'Max. Year',
                'type' => 'string'

            ],
        ];

        if(PluginManager::instance()->exists('RainLab.Builder')){
            Event::listen('pages.builder.registerControls', function($controlLibrary) use($properties) {
                $controlLibrary->registerControl(
                    'yearpicker',
                    'Year Picker',
                    'Sélecteur d\'année',
                    \RainLab\Builder\Classes\ControlLibrary::GROUP_WIDGETS,
                    'icon-file-image-o',
                    $controlLibrary->getStandardProperties([], $properties),
                    'LucasPalomba\YearPicker\Classes\ControlDesignTimeProvider'
                );
            });
        }
    }
    public function registerFormWidgets()
    {
        return [
            \LucasPalomba\YearPicker\FormWidgets\YearPicker::class => 'yearpicker'
        ];
    }

    /**
     * registerContentFields
     */
    public function registerContentFields()
    {
        return [
            \LucasPalomba\YearPicker\ContentFields\YearPicker::class => 'lp-yearpicker'
        ];
    }
}
