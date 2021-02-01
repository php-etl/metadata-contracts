<?php declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

interface FieldGuesserInterface
{
    /**
     * @param ClassTypeMetadataInterface $class
     *
     * @return \Iterator
     */
    public function __invoke(ClassTypeMetadataInterface $class): \Iterator;
}
