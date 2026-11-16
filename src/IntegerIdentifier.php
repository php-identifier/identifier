<?php

declare(strict_types=1);

namespace Identifier;

/**
 * An identifier that may be represented as an integer
 */
interface IntegerIdentifier extends Identifier
{
    /**
     * Returns an integer representation of the identifier
     *
     * @return int | decimal-int-string The integer value or string integer representation of the identifier.
     *
     * @throws Exception\NotConvertible MUST throw if the implementation cannot return the identifier as an integer or an integer string
     */
    public function toInteger(): int | string;
}
