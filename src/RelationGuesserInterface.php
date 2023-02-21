<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

interface RelationGuesserInterface
{
    /**
     * @return RelationMetadataInterface[]|\Generator
     */
    public function __invoke(ClassTypeMetadataInterface $class): iterable;
}
