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

use Identifier\Exception\InvalidArgumentException;
use Identifier\IdentifierFactoryInterface;

/**
 * Describes the interface of a factory used to create binary identifiers
 */
interface BinaryIdentifierFactoryInterface extends IdentifierFactoryInterface
{
    public function create(): BinaryIdentifierInterface;

    /**
     * @throws InvalidArgumentException MUST throw if the $identifier is not a
     *     legal value
     */
    public function createFromString(string $identifier): BinaryIdentifierInterface;

    /**
     * Creates a new instance of an identifier from the given byte string representation
     *
     * @param string $identifier An octet string encoded according to the
     *     specification for the type of identifier
     *
     * @throws InvalidArgumentException MUST throw if the $identifier is not a
     *     legal value
     */
    public function createFromBytes(string $identifier): BinaryIdentifierInterface;

    /**
     * Creates a new instance of an identifier from the given hexadecimal string representation
     *
     * @param string $identifier A hexadecimal string representation of the identifier
     *
     * @throws InvalidArgumentException MUST throw if the $identifier is not a
     *     legal value
     */
    public function createFromHexadecimal(string $identifier): BinaryIdentifierInterface;

    /**
     * Creates a new instance of an identifier from the given integer representation
     *
     * @param int | string $identifier This value may be an `int` if it
     *     falls within the range of `PHP_INT_MIN` - `PHP_INT_MAX`; however, if
     *     it is outside this range, it must be a string representation of the
     *     integer
     *
     * @throws InvalidArgumentException MUST throw if the $identifier is not a
     *     legal value
     *
     * @psalm-param int | numeric-string $identifier
     */
    public function createFromInteger(int | string $identifier): BinaryIdentifierInterface;
}
