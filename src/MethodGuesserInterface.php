<?php declare(strict_types=1);

namespace Kiboko\Contract\Metadata\MethodGuesser;

use Kiboko\Contract\Metadata\ClassTypeMetadataInterface;
use Kiboko\Contract\Metadata\MethodMetadataInterface;

interface MethodGuesserInterface
{
    /**
     * @return MethodMetadataInterface[]|\Iterator
     */
    public function __invoke(\ReflectionClass $classOrObject, ClassTypeMetadataInterface $class): array|\Iterator;
}
