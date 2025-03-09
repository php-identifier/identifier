<?php

declare(strict_types=1);

namespace Identifier;

/**
 * Creates identifiers from string representations
 */
interface StringIdentifierFactory extends IdentifierFactory
{
    /**
     * Creates a new instance of an identifier from the given string representation
     *
     * @param string $identifier The string representation of the identifier is specific to the type of identifier and
     *     implementation; for example, UUIDs use a specific format, while other identifiers may use other formats
     *
     * @throws Exception\InvalidArgument MUST throw if the identifier is not a legal value
     */
    public function createFromString(string $identifier): Identifier;
}
