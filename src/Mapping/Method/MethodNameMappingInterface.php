<?php

declare(strict_types=1);

namespace spaceonfire\CommandBus\Mapping\Method;

interface MethodNameMappingInterface
{
    /**
     * Returns handler method name for given command class name
     * @param string $commandClassName
     * @return string
     */
    public function getMethodName(string $commandClassName): string;
}
