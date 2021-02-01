<?php

namespace Kiboko\Contract\Metadata;

interface ClassReferenceMetadataInterface extends ClassMetadataInterface
{
    public function getNamespace(): ?string;

    public function getName(): string;
}
