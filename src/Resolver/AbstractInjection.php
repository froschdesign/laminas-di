<?php

/**
 * @see       https://github.com/laminas/laminas-di for the canonical source repository
 * @copyright https://github.com/laminas/laminas-di/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-di/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Di\Resolver;

use function trigger_error;

use const E_USER_DEPRECATED;

trigger_error(
    sprintf(
        '%s is deprecated, please migrate to %s',
        AbstractInjection::class,
        InjectionInterface::class
    ),
    E_USER_DEPRECATED
);

/**
 * @codeCoverageIgnore Deprecated
 * @deprecated Since 3.1.0
 * @see InjectionInterface
 */
abstract class AbstractInjection
{
    /**
     * @var string
     */
    private $parameterName;

    /**
     * @param string $name
     * @return self
     */
    public function setParameterName(string $name) : self
    {
        $this->parameterName = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getParameterName() : string
    {
        return $this->parameterName;
    }

    /**
     * @return string
     */
    abstract public function export() : string;

    /**
     * @return bool
     */
    abstract public function isExportable() : bool;
}
