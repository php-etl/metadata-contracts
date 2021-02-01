<?php declare(strict_types=1);

namespace Kiboko\Contract\Metadata\RelationGuesser;

use Kiboko\Contract\Metadata\ClassTypeMetadataInterface;
use Kiboko\Contract\Metadata\RelationMetadataInterface;

interface RelationGuesserInterface
{
    /**
     * @return RelationMetadataInterface[]|\Generator
     */
    public function __invoke(ClassTypeMetadataInterface $class): array|\Iterator;
}
