<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

use _HumbugBoxa55ec68a3f71\JsonSchema\Constraints\TypeConstraint;

/**
 * @template Subject
 * @extends TypeMetadataInterface<Subject>
 * @extends \Traversable<TypeMetadataInterface<mixed>>
 */
interface IntersectionTypeMetadataInterface extends TypeMetadataInterface, \Countable, \Traversable
{
}
