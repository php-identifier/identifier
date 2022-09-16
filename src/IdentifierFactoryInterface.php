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

/**
 * Describes the interface of a factory used to create identifiers
 */
interface IdentifierFactoryInterface
{
    /**
     * Creates a new instance of an {@see IdentifierInterface} with an
     * auto-generated identifier
     */
    public function create(): IdentifierInterface;

    /**
     * Creates a new instance of an {@see IdentifierInterface} from the
     * given byte string representation of the identifier
     *
     * @param string $bytes An octet string encoded according to the
     *     specification for the type of identifier
     */
    public function createFromBytes(string $bytes): IdentifierInterface;

    /**
     * Creates a new instance of an {@see IdentifierInterface} from the
     * given integer representation of the identifier
     *
     * @param int | numeric-string $integer This value may be an `int` if it
     *     falls within the range of `PHP_INT_MIN` - `PHP_INT_MAX`; however, if
     *     it is outside this range, it must be a string representation of the
     *     integer
     */
    public function createFromInteger(int | string $integer): IdentifierInterface;

    /**
     * Creates a new instance of an {@see IdentifierInterface} from the
     * given string representation of the identifier
     *
     * @param string $identifier The string representation of the identifier is
     *     specific to the type of identifier and implementation; for example,
     *     UUIDs use a specific format, while other identifiers may use other
     *     formats
     */
    public function createFromString(string $identifier): IdentifierInterface;
}
