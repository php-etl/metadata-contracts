<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

use PhpSpec\Wrapper\Subject;

/**
 * @template Subject of object
 */
interface RelationGuesserInterface
{
    /**
     * @param ClassTypeMetadataInterface<Subject> $class
     * @return iterable<RelationMetadataInterface<mixed>>
     */
    public function __invoke(ClassTypeMetadataInterface $class): iterable;
}
