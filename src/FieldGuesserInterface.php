<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

interface FieldGuesserInterface
{
    /**
     * @template Subject of object
     *
     * @param ClassTypeMetadataInterface<Subject> $class
     *
     * @return list<FieldMetadataInterface<mixed>>
     */
    public function __invoke(ClassTypeMetadataInterface $class): iterable;
}
