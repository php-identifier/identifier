<?php

/**
 * This file is part of identifier/identifier
 *
 * identifier/identifier is open source software: you can distribute
 * it and/or modify it under the terms of the MIT License
 * (the "License"). You may not use this file except in
 * compliance with the License.
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or
 * implied. See the License for the specific language governing
 * permissions and limitations under the License.
 *
 * @copyright Copyright (c) Ben Ramsey <ben@benramsey.com>
 * @license https://opensource.org/licenses/MIT MIT License
 */

declare(strict_types=1);

namespace Identifier\Binary;

use DateTimeInterface;

/**
 * Describes the interface of a factory used to create time-based binary identifiers
 */
interface TimeBasedBinaryIdentifierFactoryInterface extends BinaryIdentifierFactoryInterface
{
    /**
     * Creates a new instance of a {@see TimeBasedBinaryIdentifierInterface}
     * with an auto-generated identifier
     */
    public function create(): TimeBasedBinaryIdentifierInterface;

    /**
     * Creates a new instance of a {@see TimeBasedBinaryIdentifierInterface}
     * from the given byte string representation of the identifier
     */
    public function createFromBytes(string $bytes): TimeBasedBinaryIdentifierInterface;

    /**
     * Creates a new instance of a {@see TimeBasedBinaryIdentifierInterface}
     * from the given {@see DateTimeInterface}
     *
     * @param DateTimeInterface $dateTime The date from which to create the
     *     time-based identifier
     */
    public function createFromDateTime(DateTimeInterface $dateTime): TimeBasedBinaryIdentifierInterface;

    /**
     * Creates a new instance of a {@see TimeBasedBinaryIdentifierInterface}
     * from the given integer representation of the identifier
     */
    public function createFromInteger(int | string $integer): TimeBasedBinaryIdentifierInterface;

    /**
     * Creates a new instance of a {@see TimeBasedBinaryIdentifierInterface}
     * from the given string representation of the identifier
     */
    public function createFromString(string $identifier): TimeBasedBinaryIdentifierInterface;
}
