<?php declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

interface MethodGuesserInterface
{
    /**
     * @return MethodMetadataInterface[]|\Iterator
     */
    public function __invoke(\ReflectionClass $classOrObject, ClassTypeMetadataInterface $class): array|\Iterator;
}
