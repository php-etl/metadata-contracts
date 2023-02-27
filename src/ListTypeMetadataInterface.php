<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @template InnerType
 * @extends IterableTypeMetadataInterface<InnerType>
 */
interface ListTypeMetadataInterface extends IterableTypeMetadataInterface
{
    /**
     * @return TypeMetadataInterface<InnerType>
     */
    public function getInner(): TypeMetadataInterface;
}
