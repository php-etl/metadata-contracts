<?php declare(strict_types=1);

namespace Kiboko\Contract\Metadata\FieldGuesser;

use Kiboko\Contract\Metadata\ClassTypeMetadataInterface;

interface FieldGuesserInterface
{
    /**
     * @param ClassTypeMetadataInterface $class
     *
     * @return \Iterator
     */
    public function __invoke(ClassTypeMetadataInterface $class): \Iterator;
}
