<?php namespace Bantenprov\YankesInfoKamar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The InfoKamar facade.
 *
 * @package Supriyanih\InfoKamar
 * @author  supriyanih <supriyanih@gmail.com>
 */
class InfoKamar extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'info-kamar';
    }
}
