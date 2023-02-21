<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

use Kiboko\Component\Metadata\Type;

/**
 * @property string $name
 * @property Type[] $types
 */
interface FieldMetadataInterface extends NamedInterface, TypedInterface
{
}
