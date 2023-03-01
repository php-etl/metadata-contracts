<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

use Traversable;

/**
 * @template Subject of array
 *
 * @extends Traversable<int, NamedInterface&TypedInterface>
 * @extends CompositeTypeMetadataInterface<array>
 */
interface ArrayTypeMetadataInterface extends \Traversable, CompositeTypeMetadataInterface
{
}
