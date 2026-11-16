<?php

declare(strict_types=1);

namespace Identifier;

/**
 * An identifier that may be represented as a string
 */
interface StringIdentifier extends Identifier
{
    /**
     * Returns a string representation of the identifier
     *
     * @return non-empty-string
     *
     * @throws Exception\NotConvertible MUST throw if the implementation cannot return the identifier as a string
     */
    public function toString(): string;
}
