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

use JsonSerializable;
use Stringable;

/**
 * Describes the interface of an identifier that identifies an object or
 * class of objects
 *
 * @psalm-immutable
 */
interface IdentifierInterface extends JsonSerializable, Stringable
{
    /**
     * Serializes the identifier to an array representation for storage
     *
     * @link https://www.php.net/manual/en/language.oop5.magic.php#object.serialize
     *
     * @return mixed[]
     */
    public function __serialize(): array;

    /**
     * Converts the array representation returned by {@see __serialize()} into
     * an IdentifierInterface instance
     *
     * @link https://www.php.net/manual/en/language.oop5.magic.php#object.unserialize
     *
     * @param mixed[] $data
     */
    public function __unserialize(array $data): void;

    /**
     * Returns -1, 0, or 1 if the identifier is less than, equal to, or greater
     * than the other value
     *
     * Implementations may choose to compare the identifier against any other
     * type, internally converting the value for the comparison. However, if an
     * implementation encounters a value it cannot compare, it must throw a
     * {@see Exception\NotComparableException} exception.
     *
     * @throws Exception\NotComparableException The implementation is
     *     not able to make comparisons with the other value provided.
     *
     * @psalm-return -1 | 0 | 1
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
     * @throws Exception\NotComparableException The implementation is
     *     not able to make comparisons with the other value provided.
     */
    public function equals(mixed $other): bool;

    /**
     * Returns a string representation of the identifier
     */
    public function toString(): string;
}
