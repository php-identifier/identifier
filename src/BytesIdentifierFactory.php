<?php

declare(strict_types=1);

namespace Identifier;

/**
 * Creates identifiers based on arbitrary binary data
 */
interface BytesIdentifierFactory extends IdentifierFactory
{
    public function create(): BytesIdentifier;

    /**
     * Creates a new instance of an identifier from the given byte string representation
     *
     * @param non-empty-string $identifier A binary octet string encoded according to the specification for the type of identifier
     *
     * @throws Exception\InvalidArgument MUST throw if $identifier is not a legal value
     */
    public function createFromBytes(string $identifier): BytesIdentifier;
}
