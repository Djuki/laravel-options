<?php namespace Djuki\Options;

class EloquentOptions {

    /**
     * Get option value by provided key
     *
     * @param $repository Table name
     * @param $optionName
     * @param $failValue
     *
     * @return mixed
     */
    public function get($repository, $optionName, $failValue = false)
    {
        return isset($repository->options[$optionName]) ?
            $repository->options[$optionName] : $failValue;
    }

    /**
     * Form helper to create field with values from option
     * @param $fieldType
     * @param $repository
     * @param $optionName
     * @param bool $failValue
     * @return mixed
     */
    public function make($fieldType, $repository, $optionName, $failValue = false)
    {
        return call_user_func('Form::'.$fieldType, 'options['.$optionName.']', $this->get($repository, $optionName, $failValue));
    }
}