<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

interface FieldGuesserInterface
{
    public function __invoke(ClassTypeMetadataInterface $class): iterable;
}
