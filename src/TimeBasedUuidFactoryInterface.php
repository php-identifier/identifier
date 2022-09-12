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
 * Describes the interface of a factory used to create time-based UUIDs
 */
interface TimeBasedUuidFactoryInterface extends TimeBasedBinaryIdentifierFactoryInterface
{
    /**
     * Creates a new instance of a {@see TimeBasedUuidInterface} with an
     * auto-generated identifier
     */
    public function create(): TimeBasedUuidInterface;

    /**
     * Creates a new instance of a {@see TimeBasedUuidInterface} from the given
     * byte string representation of the identifier
     */
    public function createFromBytes(string $bytes): TimeBasedUuidInterface;

    /**
     * Creates a new instance of a {@see TimeBasedUuidInterface} from the given
     * {@see DateTimeInterface}
     *
     * @param DateTimeInterface $dateTime The date from which to create a
     *     time-based UUID
     * @param string | null $node A value to use for the UUID node field instead
     *     of the implementation's default node value (which might be the system
     *     node)
     * @param int | null $clockSequence A custom clock sequence value to prevent
     *     collisions
     */
    public function createFromDateTime(
        DateTimeInterface $dateTime,
        ?string $node = null,
        ?int $clockSequence = null,
    ): TimeBasedUuidInterface;

    /**
     * Creates a new instance of a {@see TimeBasedUuidInterface} from the given
     * integer representation of the identifier
     */
    public function createFromInteger(int | string $integer): TimeBasedUuidInterface;

    /**
     * Creates a new instance of a {@see TimeBasedUuidInterface} from the given
     * string representation of the identifier
     */
    public function createFromString(string $identifier): TimeBasedUuidInterface;
}
