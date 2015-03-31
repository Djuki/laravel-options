<?php namespace Djuki\Options;

trait FieldOptions {

    /**
     * Accessor to get array from serialized string
     * @param $value
     * @return array|mixed
     */
    public function getOptionsAttribute($value)
    {
        return (empty($value)) ? [] : unserialize($value);
    }

    /**
     * Muttator to transform array values into serialized string
     * @param $value
     */
    public function setOptionsAttribute($value)
    {
        $this->attributes['options'] = serialize($value);
    }

    /**
     * Add Options
     * @param $key
     * @param $value
     */
    public function addOption($key, $value)
    {
        $this->options[$key] = $value;
    }

    /**
     * Remove option by key
     * @param $key
     */
    public function removeOption($key)
    {
        if (isset($this->options[$key])) {
            unset($this->options[$key]);
        }
    }
}

