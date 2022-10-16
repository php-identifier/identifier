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
 * Describes the interface of an integer identifier
 */
interface IntegerIdentifier extends Identifier
{
    /**
     * Returns an integer representation of the identifier
     *
     * Implementations MAY support identifiers greater than PHP_INT_MAX and less
     * than PHP_INT_MIN. In this case, this method SHOULD return a numeric
     * string.
     *
     * @psalm-return int | numeric-string
     */
    public function toInteger(): int | string;
}
