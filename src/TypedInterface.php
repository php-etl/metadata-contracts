<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @template Subject
 */
interface TypedInterface
{
    /**
     * @return TypeMetadataInterface<Subject>
     */
    public function getType(): TypeMetadataInterface;
}
