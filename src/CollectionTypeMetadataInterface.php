<?php declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

interface CollectionTypeMetadataInterface extends IterableTypeMetadataInterface
{
    public function getType(): ClassMetadataInterface;

    public function getInner(): TypeMetadataInterface;
}
