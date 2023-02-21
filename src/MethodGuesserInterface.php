<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

interface MethodGuesserInterface
{
    public function __invoke(\ReflectionClass $classOrObject, ClassTypeMetadataInterface $class): iterable;
}
