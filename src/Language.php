<?php

namespace Armincms\Region;
 
class Language 
{   
    /**
     * List of available locales.
     * 
     * @var array
     */
    protected static $locales = []; 

    /**
     * Requries availble locales.
     *
     * @return $this
     */
    protected static function setLocales()
    {
        if(empty(static::$locales)) {
            static::$locales = (array) require __DIR__.'/locales.php';
        }

        return static::class;
    }

    /**
     * Get the avaialbe locales.
     * 
     * @return array
     */
    public static function locales()
    { 
        static::setLocales();

        return static::$locales;
    }    
}
