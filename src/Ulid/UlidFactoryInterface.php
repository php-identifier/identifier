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

namespace Identifier\Ulid;

use DateTimeInterface;
use Identifier\Binary\BinaryIdentifierFactoryInterface;

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

    public function createFromBytes(string $identifier): UlidInterface;

    public function createFromHexadecimal(string $identifier): UlidInterface;

    public function createFromInteger(int | string $identifier): UlidInterface;

    public function createFromString(string $identifier): UlidInterface;

    /**
     * Creates a new instance of an identifier from the given date-time
     *
     * @param DateTimeInterface $dateTime The date-time to use when creating the identifier
     */
    public function createFromDateTime(DateTimeInterface $dateTime): UlidInterface;
}
