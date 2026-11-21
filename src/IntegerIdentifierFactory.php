<?php

declare(strict_types=1);

namespace Identifier;

use Override;

/**
 * Creates identifiers that may be represented as integers
 */
interface IntegerIdentifierFactory extends IdentifierFactory
{
    #[Override]
    public function create(): IntegerIdentifier;

    /**
     * Creates a new instance of an identifier from the given integer representation
     *
     * @param int | numeric-string $identifier The integer value or string integer representation of the identifier.
     *
     * @throws Exception\InvalidArgument MUST throw if the identifier is not a legal value
     */
    public function createFromInteger(int | string $identifier): IntegerIdentifier;
}
