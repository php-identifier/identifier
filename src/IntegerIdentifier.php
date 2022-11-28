<?php

namespace Identifier;

interface IntegerIdentifier extends Identifier
{
    /**
     * Returns an integer representation of the identifier
     *
     * @throws Exception\OutOfRange MUST throw if the implementation does
     *     not support integers outside the range of PHP_INT_MIN and
     *     PHP_INT_MAX and the identifier evaluates to an integer outside
     *     this range
     *
     * @psalm-return int | numeric-string
     */
    public function toInteger(): int | string;
}
