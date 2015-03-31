<?php

use Illuminate\Support\Facades\Facade;

class OptionField extends Facade {

    protected static function getFacadeAccessor() { return 'eloquent.options'; }

}
