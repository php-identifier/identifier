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

namespace Identifier\Binary;

use Identifier\IdentifierInterface;

/**
 * Describes the interface of a binary-string identifier
 *
 * Binary-string identifiers are useful especially when the size of the
 * identifier overflows the system limitations for maximum/minimum integers.
 * For example, UUIDs and ULIDs, both 128-bit integers, are binary-string
 * identifiers.
 *
 * @psalm-immutable
 */
interface BinaryIdentifierInterface extends IdentifierInterface
{
    /**
     * Returns the identifier as a raw byte string
     */
    public function toBytes(): string;

    /**
     * Returns a string representation of the identifier encoded as hexadecimal
     * characters
     */
    public function toHexadecimal(): string;

    /**
     * Returns an integer representation of the identifier
     *
     * Implementations may choose to support binary identifiers greater than
     * PHP_INT_MAX and less than PHP_INT_MIN. In this case, this method should
     * return a numeric string.
     *
     * @return int | numeric-string
     */
    public function toInteger(): int | string;
}
