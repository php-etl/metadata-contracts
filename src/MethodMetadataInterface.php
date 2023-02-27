<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @template ReturnType
 */
interface MethodMetadataInterface extends NamedInterface
{
    public function getArguments(): ArgumentListMetadataInterface;

    /**
     * @return TypeMetadataInterface<ReturnType>
     */
    public function getReturnType(): TypeMetadataInterface;
}
