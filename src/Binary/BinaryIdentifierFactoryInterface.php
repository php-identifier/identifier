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

use Identifier\IdentifierFactoryInterface;

/**
 * Describes the interface of a factory used to create binary identifiers
 */
interface BinaryIdentifierFactoryInterface extends IdentifierFactoryInterface
{
    /**
     * Creates a new instance of a {@see BinaryIdentifierInterface} with an
     * auto-generated identifier
     */
    public function create(): BinaryIdentifierInterface;

    /**
     * Creates a new instance of a {@see BinaryIdentifierInterface} from the
     * given byte string representation of the identifier
     */
    public function createFromBytes(string $bytes): BinaryIdentifierInterface;

    /**
     * Creates a new instance of a {@see BinaryIdentifierInterface} from the
     * given integer representation of the identifier
     */
    public function createFromInteger(int | string $integer): BinaryIdentifierInterface;

    /**
     * Creates a new instance of a {@see BinaryIdentifierInterface} from the
     * given string representation of the identifier
     */
    public function createFromString(string $identifier): BinaryIdentifierInterface;
}
