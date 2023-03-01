<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

use Countable;
use Traversable;

/**
 * @extends Traversable<ArgumentMetadataInterface<mixed>>
 */
interface ArgumentListMetadataInterface extends \Traversable, Countable
{
}
