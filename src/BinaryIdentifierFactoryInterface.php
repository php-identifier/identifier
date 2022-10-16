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
 * Describes the interface of a factory used to create binary identifiers
 */
interface BinaryIdentifierFactoryInterface extends IdentifierFactoryInterface
{
    public function create(): BinaryIdentifierInterface;

    /**
     * Creates a new instance of an identifier from the given byte string representation
     *
     * @param string $identifier An octet string encoded according to the
     *     specification for the type of identifier
     *
     * @throws Exception\InvalidArgumentException MUST throw if the $identifier
     *     is not a legal value
     */
    public function createFromBytes(string $identifier): BinaryIdentifierInterface;
}
