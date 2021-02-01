<?php declare(strict_types=1);

namespace Kiboko\Contract\Metadata\Annotated;

interface AnnotatedInterface
{
    public function getAnnotation(): ?string;
}
