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

namespace Identifier;

use DateTimeInterface;

/**
 * Describes the interface of a factory used to create ULIDs
 *
 * ULIDs are universally-unique, lexicographically-sortable identifiers,
 * provided as an alternate for UUIDs.
 *
 * @link https://github.com/ulid/spec ULID specification
 */
interface UlidFactoryInterface extends TimeBasedBinaryIdentifierFactoryInterface
{
    /**
     * Creates a new instance of a {@see UlidInterface} with an auto-generated
     * identifier
     */
    public function create(): UlidInterface;

    /**
     * Creates a new instance of a {@see UlidInterface} from the given byte
     * string representation of the identifier
     */
    public function createFromBytes(string $bytes): UlidInterface;

    /**
     * Creates a new instance of a {@see UlidInterface} from the given
     * {@see DateTimeInterface}
     */
    public function createFromDateTime(DateTimeInterface $dateTime): UlidInterface;

    /**
     * Creates a new instance of a {@see UlidInterface} from the given integer
     * representation of the identifier
     */
    public function createFromInteger(int | string $integer): UlidInterface;

    /**
     * Creates a new instance of a {@see UlidInterface} from the given string
     * representation of the identifier
     */
    public function createFromString(string $identifier): UlidInterface;
}
