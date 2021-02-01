<?php declare(strict_types=1);

namespace Kiboko\Contract\Metadata\PropertyGuesser;

use Kiboko\Contract\Metadata\ClassTypeMetadataInterface;
use Kiboko\Contract\Metadata\PropertyMetadataInterface;

interface PropertyGuesserInterface
{
    /**
     * @return PropertyMetadataInterface[]|\Generator
     */
    public function __invoke(\ReflectionClass $classOrObject, ClassTypeMetadataInterface $class): array|\Iterator;
}
