<?php

declare(strict_types=1);

namespace Identifier;

/**
 * Describes the interface of an integer identifier
 */
interface IntegerIdentifier extends Identifier
{
    /**
     * Returns an integer representation of the identifier
     *
     * Implementations MAY support identifiers greater than PHP_INT_MAX and less
     * than PHP_INT_MIN. In this case, this method SHOULD return a numeric
     * string.
     *
     * @psalm-return int | numeric-string
     */
    public function toInteger(): int | string;
}
