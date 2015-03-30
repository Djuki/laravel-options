<?php namespace Djuki/Options;

trait FieldOptions {

    public function getOptionsAttribute($value)
    {
        return (empty($value)) ? [] : unserialize($value);
    }

    public function setOptionsAttribute($value)
    {
        $this->attributes['options'] = serialize($value);
    }

    public function addOption($key, $value)
    {
        $this->options[$key] = $value;
    }

    public function removeOption($key)
    {
        if (isset($this->options[$key])) {
            unset($this->options[$key]);
        }
    }
}

