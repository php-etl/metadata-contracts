<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

use Countable;
use Traversable;

/**
 * @extends TypeMetadataInterface<mixed>
 * @extends Traversable<TypeMetadataInterface<mixed>>
 */
interface UnionTypeMetadataInterface extends TypeMetadataInterface, Countable, Traversable
{
}
