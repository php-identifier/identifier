<?php

declare(strict_types=1);

namespace Identifier;

/**
 * Describes the interface of a factory used to create binary identifiers
 */
interface BinaryIdentifierFactory extends IdentifierFactory
{
    public function create(): BinaryIdentifier;

    /**
     * Creates a new instance of an identifier from the given byte string representation
     *
     * @param string $identifier An octet string encoded according to the
     *     specification for the type of identifier
     *
     * @throws Exception\InvalidArgument MUST throw if $identifier is not a legal value
     */
    public function createFromBytes(string $identifier): BinaryIdentifier;
}
