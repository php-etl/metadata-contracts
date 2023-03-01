<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

use Countable;
use Traversable;

/**
 * @template Subject
 *
 * @extends TypeMetadataInterface<Subject>
 * @extends Traversable<TypeMetadataInterface<mixed>>
 */
interface IntersectionTypeMetadataInterface extends TypeMetadataInterface, Countable, Traversable
{
}
