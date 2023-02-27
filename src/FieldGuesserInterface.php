<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @template Subject of object
 */
interface FieldGuesserInterface
{
    /**
     * @param ClassTypeMetadataInterface<Subject> $class
     * @return list<FieldMetadataInterface<mixed>>
     */
    public function __invoke(ClassTypeMetadataInterface $class): iterable;
}
