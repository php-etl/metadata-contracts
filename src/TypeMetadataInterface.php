<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @template Subject
 */
interface TypeMetadataInterface
{
    public function __toString(): string;
}
