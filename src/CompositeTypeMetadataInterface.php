<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @template Subject of object|array
 * @extends TypeMetadataInterface<Subject>
 */
interface CompositeTypeMetadataInterface extends TypeMetadataInterface
{
}
