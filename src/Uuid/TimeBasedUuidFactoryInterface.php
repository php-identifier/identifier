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

namespace Identifier\Uuid;

use DateTimeInterface;

/**
 * Describes the interface of a factory used to create time-based UUIDs
 */
interface TimeBasedUuidFactoryInterface extends UuidFactoryInterface
{
    public function create(): TimeBasedUuidInterface;

    public function createFromBytes(string $identifier): TimeBasedUuidInterface;

    public function createFromHexadecimal(string $identifier): TimeBasedUuidInterface;

    public function createFromInteger(int | string $identifier): TimeBasedUuidInterface;

    public function createFromString(string $identifier): TimeBasedUuidInterface;

    /**
     * Creates a new instance of an identifier from the given date-time
     *
     * @param DateTimeInterface $dateTime The date-time to use when creating the identifier
     */
    public function createFromDateTime(DateTimeInterface $dateTime): TimeBasedUuidInterface;
}
