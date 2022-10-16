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

use DateTimeInterface;

/**
 * Describes the interface of a factory used to create identifiers based on
 * date-time values
 */
interface DateTimeIdentifierFactoryInterface extends IdentifierFactoryInterface
{
    public function create(): DateTimeIdentifierInterface;

    /**
     * Creates a new instance of an identifier from the given date-time
     *
     * @param DateTimeInterface $dateTime The date-time to use when creating the identifier
     *
     * @throws Exception\InvalidArgumentException MUST throw if the $identifier
     *     is not a legal value
     */
    public function createFromDateTime(DateTimeInterface $dateTime): DateTimeIdentifierInterface;
}
