<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

interface PropertyGuesserInterface
{
    /**
     * @template Subject of object
     *
     * @param \ReflectionClass<Subject>           $classOrObject
     * @param ClassTypeMetadataInterface<Subject> $class
     *
     * @return list<PropertyMetadataInterface<mixed>>
     */
    public function __invoke(\ReflectionClass $classOrObject, ClassTypeMetadataInterface $class): iterable;
}
