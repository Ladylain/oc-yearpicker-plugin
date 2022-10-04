<?php namespace LucasPalomba\YearPicker\FormWidgets;

use Backend\Classes\FormField;
use Backend\Classes\FormWidgetBase;
use Config;

class YearPicker extends FormWidgetBase
{
    /**
     * @var string defaultAlias to identify this widget.
     */
    protected $defaultAlias = 'yearpicker';


    public $minYear = null;

    public $maxYear = null;


    /**
     * {@inheritDoc}
     */
    public function init()
    {
        $this->fillFromConfig([
            'minYear',
            'maxYear',
        ]);
    }

    public function render(){
        $this->prepareVars();
        $this->addCss('css/yearpicker.css');
        $this->addJs('js/yearpicker.js');
        return $this->makePartial('yearpicker');
    }

    public function prepareVars(){
        $this->vars['name'] = $this->getFieldName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['field'] = $this->formField;
        $this->vars['minYear'] = $this->minYear;
        $this->vars['maxYear'] = $this->maxYear;
    }


    /**
     * @inheritDoc
     */
    public function getSaveValue($value)
    {
        if (!strlen($value)) {
            return null;
        }

        return $value;
    }
}