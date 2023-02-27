<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @extends TypeMetadataInterface<mixed>
 * @extends \Traversable<TypeMetadataInterface<mixed>>
 */
interface UnionTypeMetadataInterface extends TypeMetadataInterface, \Countable, \Traversable
{
}
