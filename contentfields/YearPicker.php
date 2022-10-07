<?php namespace LucasPalomba\YearPicker\ContentFields;

use Tailor\Classes\ContentFieldBase;
use October\Contracts\Element\FormElement;
use October\Contracts\Element\ListElement;
use October\Contracts\Element\FilterElement;

class YearPicker extends ContentFieldBase
{
    public $minYear = null;

    public $maxYear = null;

    /**
     * defineConfig will process the field configuration.
     */
    public function defineConfig(array $config)
    {
        if (isset($config['minYear'])) {
            $this->minYear = $config['minYear'];
        }
        if (isset($config['minYear'])) {
            $this->maxYear = $config['maxYear'];
        }
    }

    /**
     * defineFormField will define how a field is displayed in a form.
     */
    public function defineFormField(FormElement $form, $context = null)
    {
        $form->addFormField($this->fieldName, $this->label)->useConfig($this->config);
    }

    /**
     * defineListColumn will define how a field is displayed in a list.
     */
    public function defineListColumn(ListElement $list, $context = null)
    {
        $list->defineColumn($this->fieldName, $this->label)->displayAs('text');
    }

    /**
     * defineFilterScope will define how a field is displayed in a filter.
     */
    public function defineFilterScope(FilterElement $filter, $context = null)
    {
        // ...
    }

    /**
     * extendModelObject will extend the record model.
     */
    public function extendModelObject($model)
    {
        // ...
    }

    /**
     * extendDatabaseTable adds any required columns to the database.
     */
    public function extendDatabaseTable($table)
    {
        $table->mediumText($this->fieldName)->nullable();
    }
}
