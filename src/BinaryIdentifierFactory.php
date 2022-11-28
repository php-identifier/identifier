<?php

namespace Identifier;

interface BinaryIdentifierFactory extends IdentifierFactory
{
    public function create(): BinaryIdentifier;

    /**
     * Creates a new instance of an identifier from the given byte string
     * representation
     *
     * @param string $identifier A binary octet string encoded according to
     *     the specification for the type of identifier
     *
     * @throws Exception\InvalidArgument MUST throw if $identifier is not a
     *     legal value
     */
    public function createFromBytes(string $identifier): BinaryIdentifier;
}
