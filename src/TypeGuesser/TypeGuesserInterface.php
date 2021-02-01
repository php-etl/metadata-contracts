<?php declare(strict_types=1);

namespace Kiboko\Contract\Metadata\TypeGuesser;

use Kiboko\Contract\Metadata\TypeMetadataInterface;

interface TypeGuesserInterface
{
    public function __invoke(\ReflectionClass $class, \Reflector $reflector): TypeMetadataInterface;
}
