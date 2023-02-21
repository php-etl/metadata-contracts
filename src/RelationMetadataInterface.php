<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @property string $name
 * @property string $types
 */
interface RelationMetadataInterface extends NamedInterface, TypedInterface
{
}
