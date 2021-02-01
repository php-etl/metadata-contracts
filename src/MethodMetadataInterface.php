<?php

namespace Kiboko\Contract\Metadata;

interface MethodMetadataInterface extends NamedInterface
{
    public function getArguments(): ArgumentListMetadataInterface;

    public function getReturnType(): TypeMetadataInterface;
}
