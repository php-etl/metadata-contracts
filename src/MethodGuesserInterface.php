<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @template Subject of object
 */
interface MethodGuesserInterface
{
    /**
     * @param \ReflectionClass<Subject> $classOrObject
     * @param ClassTypeMetadataInterface<Subject> $class
     * @return iterable<TypeMetadataInterface<mixed>>
     */
    public function __invoke(\ReflectionClass $classOrObject, ClassTypeMetadataInterface $class): iterable;
}
