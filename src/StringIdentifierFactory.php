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

/**
 * Describes the interface of a factory used to create string identifiers
 */
interface StringIdentifierFactory extends IdentifierFactory
{
    /**
     * Creates a new instance of an identifier from the given string representation
     *
     * @param string $identifier The string representation of the identifier is
     *     specific to the type of identifier and implementation; for example,
     *     UUIDs use a specific format, while other identifiers may use other
     *     formats
     *
     * @throws Exception\InvalidArgument MUST throw if $identifier is not a legal value
     */
    public function createFromString(string $identifier): Identifier;
}