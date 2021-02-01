<?php declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

interface ClassReferenceMetadataInterface extends ClassMetadataInterface
{
    public function getNamespace(): ?string;

    public function getName(): string;
}
