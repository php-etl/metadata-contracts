<?php

declare(strict_types=1);

namespace Kiboko\Contract\Metadata;

/**
 * @template Subject of object
 *
 * @extends ClassMetadataInterface<Subject>
 */
interface ClassTypeMetadataInterface extends ClassMetadataInterface
{
    /**
     * @return class-string<Subject>|null
     */
    public function getNamespace(): ?string;

    /**
     * @return class-string<Subject>|null
     */
    public function getName(): ?string;

    /**
     * @return iterable<PropertyMetadataInterface<mixed>>
     */
    public function getProperties(): iterable;

    /**
     * @return PropertyMetadataInterface<Subject>
     */
    public function getProperty(string $name): PropertyMetadataInterface;

    /**
     * @param PropertyMetadataInterface<mixed> ...$properties
     *
     * @return ClassTypeMetadataInterface<Subject>
     */
    public function addProperties(PropertyMetadataInterface ...$properties): self;

    /**
     * @return iterable<MethodMetadataInterface<mixed>>
     */
    public function getMethods(): iterable;

    /**
     * @return MethodMetadataInterface<Subject>
     */
    public function getMethod(string $name): MethodMetadataInterface;

    /**
     * @param MethodMetadataInterface<mixed> ...$methods
     *
     * @return ClassTypeMetadataInterface<Subject>
     */
    public function addMethods(MethodMetadataInterface ...$methods): self;

    /**
     * @return iterable<FieldMetadataInterface<mixed>>
     */
    public function getFields(): iterable;

    /**
     * @return FieldMetadataInterface<Subject>
     */
    public function getField(string $name): FieldMetadataInterface;

    /**
     * @param FieldMetadataInterface<mixed> ...$fields
     *
     * @return ClassTypeMetadataInterface<Subject>
     */
    public function addFields(FieldMetadataInterface ...$fields): self;

    /**
     * @return iterable<RelationMetadataInterface<mixed>>
     */
    public function getRelations(): iterable;

    /**
     * @return RelationMetadataInterface<Subject>
     */
    public function getRelation(string $name): RelationMetadataInterface;

    /**
     * @param RelationMetadataInterface<mixed> ...$relations
     *
     * @return ClassTypeMetadataInterface<Subject>
     */
    public function addRelations(RelationMetadataInterface ...$relations): self;
}
