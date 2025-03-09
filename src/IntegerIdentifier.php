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
     * @return int | numeric-string
     *
     * @throws Exception\OutOfRange MUST throw if the implementation does not support integers outside the range of
     *     `PHP_INT_MIN` and `PHP_INT_MAX` and the identifier evaluates to an integer outside this range
     */
    public function toInteger(): int | string;
}
