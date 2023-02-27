<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @template Subject of object
 * @template InnerType
 * @extends IterableTypeMetadataInterface<InnerType>
 * @extends TypedInterface<Subject>
 */
interface CollectionTypeMetadataInterface extends IterableTypeMetadataInterface, TypedInterface
{
    /**
     * @return TypeMetadataInterface<InnerType>
     */
    public function getInner(): TypeMetadataInterface;
}
