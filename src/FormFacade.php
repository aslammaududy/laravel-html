<?php

namespace Aslammaududy\LaravelHtml;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aslammaududy\LaravelHtml\FormBuilder
 */
class FormFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'form';
    }
}
