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
     * Creates a new instance of an identifier
     */
    public function create(): IdentifierInterface;

    /**
     * Creates a new instance of an identifier from the given string representation
     *
     * @param string $identifier The string representation of the identifier is
     *     specific to the type of identifier and implementation; for example,
     *     UUIDs use a specific format, while other identifiers may use other
     *     formats
     */
    public function createFromString(string $identifier): IdentifierInterface;
}
