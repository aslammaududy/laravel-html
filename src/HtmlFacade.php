<?php

namespace Aslammaududy\LaravelHtml;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aslammaududy\LaravelHtml\HtmlBuilder
 */
class HtmlFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'html';
    }
}
