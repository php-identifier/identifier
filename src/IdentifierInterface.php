<?php

/**
 * This file is part of identifier/identifier
 *
 * identifier/identifier is open source software: you can distribute
 * it and/or modify it under the terms of the MIT License
 * (the "License"). You may not use this file except in
 * compliance with the License.
 *
 * @copyright Copyright (c) Ben Ramsey <ben@benramsey.com>
 * @license https://opensource.org/licenses/MIT MIT License
 */

declare(strict_types=1);

namespace Identifier;

/**
 * Describes the interface of an identifier that identifies an object or
 * class of objects
 */
interface IdentifierInterface
{
    /**
     * Returns an integer less than, equal to, or greater than zero if the
     * identifier is less than, equal to, or greater than the other value
     *
     * Implementations may choose to compare the identifier against any other
     * type, internally converting the value for the comparison. However, if an
     * implementation encounters a value it cannot compare, it must throw an
     * {@see Exception\NotComparableException} exception.
     *
     * @throws Exception\NotComparableException MUST throw if the implementation
     *     is unable to make comparisons with the other value provided.
     */
    public function compareTo(mixed $other): int;

    /**
     * Returns true if the identifier is equal to the other value
     *
     * Implementations may choose to evaluate equality of the identifier against
     * a value of any other type, internally converting the value for the
     * comparison. However, if an implementation encounters a value it cannot
     * compare, it must throw a {@see Exception\NotComparableException}
     * exception.
     *
     * @throws Exception\NotComparableException MUST throw if the implementation
     *     is unable to make comparisons with the other value provided.
     */
    public function equals(mixed $other): bool;

    /**
     * Returns a string representation of the identifier
     */
    public function toString(): string;
}
