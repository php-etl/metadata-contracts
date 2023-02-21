<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

interface MethodMetadataInterface extends NamedInterface
{
    public function getArguments(): ArgumentListMetadataInterface;

    public function getReturnType(): TypeMetadataInterface;
}
