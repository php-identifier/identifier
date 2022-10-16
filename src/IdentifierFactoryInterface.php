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
 * Describes the interface of a factory used to create identifiers
 */
interface IdentifierFactoryInterface
{
    /**
     * Creates a new instance of an identifier
     */
    public function create(): IdentifierInterface;
}
