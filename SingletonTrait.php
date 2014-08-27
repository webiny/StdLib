<?php
/**
 * Webiny Framework (http://www.webiny.com/framework)
 *
 * @link      http://www.webiny.com/wf-snv for the canonical source repository
 * @copyright Copyright (c) 2009-2013 Webiny LTD. (http://www.webiny.com)
 * @license   http://www.webiny.com/framework/license
 * @package   WebinyFramework
 */

namespace Webiny\Component\StdLib;

/**
 * Description
 *
 * @package         Webiny\StdLib
 */

trait SingletonTrait
{
    protected static $_wfInstance;

    /**
     * @return $this;
     */
    final public static function getInstance()
    {
        if (isset(static::$_wfInstance)) {
            return static::$_wfInstance;
        } else {
            static::$_wfInstance = new static;
            static::$_wfInstance->init();
            static::$_wfInstance->_init();

            return static::$_wfInstance;
        }
    }

    /**
     * The constructor is set to private to prevent creating new instances.
     * If you want to fire a function after the singleton instance is created, just implement 'init' method into your class.
     */
    final private function __construct()
    {
        //
    }

    /**
     * Override this if you wish to do some stuff once the singleton instance has been created.
     */
    protected function init()
    {
    }

    /**
     * Override this if you wish to do some stuff once the singleton instance has been created.
     */
    protected function _init()
    {
    }

    final private function __wakeup()
    {
    }

    final private function __clone()
    {
    }
}