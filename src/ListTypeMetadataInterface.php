<?php

namespace Kiboko\Contract\Metadata;

interface ListTypeMetadataInterface extends IterableTypeMetadataInterface
{
    public function getInner(): TypeMetadataInterface;
}
