<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @template InnerType
 *
 * @extends TypeMetadataInterface<iterable<InnerType>>
 */
interface IterableTypeMetadataInterface extends TypeMetadataInterface
{
}
