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

namespace Identifier\Ulid;

use DateTimeInterface;
use Identifier\Binary\BinaryIdentifierFactoryInterface;
use Identifier\Exception\InvalidArgumentException;

/**
 * Describes the interface of a factory used to create ULIDs
 *
 * ULIDs are universally-unique, lexicographically-sortable identifiers,
 * provided as an alternative to UUIDs.
 *
 * @link https://github.com/ulid/spec ULID specification
 */
interface UlidFactoryInterface extends BinaryIdentifierFactoryInterface
{
    public function create(): UlidInterface;

    /**
     * @throws InvalidArgumentException MUST throw if the $identifier is not a
     *     legal value
     */
    public function createFromBytes(string $identifier): UlidInterface;

    /**
     * @throws InvalidArgumentException MUST throw if the $identifier is not a
     *     legal value
     */
    public function createFromHexadecimal(string $identifier): UlidInterface;

    /**
     * @throws InvalidArgumentException MUST throw if the $identifier is not a
     *     legal value
     */
    public function createFromInteger(int | string $identifier): UlidInterface;

    /**
     * @throws InvalidArgumentException MUST throw if the $identifier is not a
     *     legal value
     */
    public function createFromString(string $identifier): UlidInterface;

    /**
     * Creates a new instance of an identifier from the given date-time
     *
     * @param DateTimeInterface $dateTime The date-time to use when creating the identifier
     *
     * @throws InvalidArgumentException MUST throw if the $dateTime is not a
     *     legal value
     */
    public function createFromDateTime(DateTimeInterface $dateTime): UlidInterface;
}
