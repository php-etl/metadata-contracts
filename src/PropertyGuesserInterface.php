<?php declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

interface PropertyGuesserInterface
{
    /**
     * @return PropertyMetadataInterface[]|\Generator
     */
    public function __invoke(\ReflectionClass $classOrObject, ClassTypeMetadataInterface $class): array|\Iterator;
}
