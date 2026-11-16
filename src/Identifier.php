<?php

declare(strict_types=1);

namespace Identifier;

/**
 * Defines the most basic operations all identifiers support
 */
interface Identifier
{
    /**
     * Returns an integer less than, equal to, or greater than zero if the identifier is less than, equal to, or greater than the other value
     *
     * @throws Exception\NotComparable MUST throw if the implementation cannot or chooses not to compare the other value provided
     */
    public function compareTo(mixed $other): int;

    /**
     * Returns true if the identifier is equal to the other value
     *
     * MUST NOT throw an exception; returns false if the implementation cannot or chooses not to compare the other value provided.
     */
    public function equals(mixed $other): bool;

    /**
     * Returns a string of bytes that places the identifier in order among other identifiers
     *
     * Any implementation may compare this sort key with the sort key of another identifier. This specification requires the order of two sort keys to match compareTo() only when the same implementation created both identifiers.
     *
     * MUST NOT throw an exception.
     *
     * @return non-empty-string
     */
    public function getSortKey(): string;
}
