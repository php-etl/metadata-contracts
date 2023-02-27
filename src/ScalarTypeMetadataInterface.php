<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @template Subject of bool|int|float|string
 * @extends TypeMetadataInterface<Subject>
 */
interface ScalarTypeMetadataInterface extends TypeMetadataInterface
{
}
