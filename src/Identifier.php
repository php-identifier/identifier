<?php

namespace Identifier;

use Stringable;

/**
 * Defines the most basic operations all identifiers support
 */
interface Identifier extends Stringable
{
    /**
     * Returns an integer less than, equal to, or greater than zero if the
     * identifier is less than, equal to, or greater than the other value
     *
     * @throws Exception\NotComparable MUST throw if the implementation is
     *     unable to make comparisons with the other value provided
     */
    public function compareTo(mixed $other): int;

    /**
     * Returns true if the identifier is equal to the other value
     *
     * @throws Exception\NotComparable MUST throw if the implementation is
     *     unable to make comparisons with the other value provided
     */
    public function equals(mixed $other): bool;

    /**
     * Returns a string representation of the identifier
     *
     * This MUST be aliased to `__toString()`. It is provided for convenience.
     *
     * @return non-empty-string
     */
    public function toString(): string;

    /**
     * Returns a string representation of the identifier
     *
     * @return non-empty-string
     */
    public function __toString(): string;
}
