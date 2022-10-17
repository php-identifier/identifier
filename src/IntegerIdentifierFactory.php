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
 * Describes the interface of a factory used to create integer identifiers
 */
interface IntegerIdentifierFactory extends IdentifierFactory
{
    public function create(): IntegerIdentifier;

    /**
     * Creates a new instance of an identifier from the given integer representation
     *
     * Implementations MAY support identifiers greater than PHP_INT_MAX and less
     * than PHP_INT_MIN. In this case, this method SHOULD accept a numeric
     * string. If the implementation does not support string integers, it SHOULD
     * throw an {@see Exception\InvalidArgument} exception.
     *
     * @param int | string $identifier This value may be an `int` if it
     *     falls within the range of `PHP_INT_MIN` - `PHP_INT_MAX`; however, if
     *     it is outside this range, it must be a string representation of the
     *     integer
     *
     * @throws Exception\InvalidArgument MUST throw if $identifier is not a legal value
     *
     * @psalm-param int | numeric-string $identifier
     */
    public function createFromInteger(int | string $identifier): IntegerIdentifier;
}
