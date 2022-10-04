<?php namespace LucasPalomba\YearPicker\Classes;

use RainLab\Builder\Widgets\DefaultControlDesignTimeProvider;

class ControlDesignTimeProvider extends DefaultControlDesignTimeProvider {
    public function __construct(){
        $this->defaultControlsTypes[] = 'yearpicker';
    }
}