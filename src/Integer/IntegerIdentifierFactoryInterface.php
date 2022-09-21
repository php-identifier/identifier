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

namespace Identifier\Integer;

use Identifier\IdentifierFactoryInterface;

/**
 * Describes the interface of a factory used to create integer identifiers
 */
interface IntegerIdentifierFactoryInterface extends IdentifierFactoryInterface
{
    public function create(): IntegerIdentifierInterface;

    public function createFromString(string $identifier): IntegerIdentifierInterface;

    /**
     * Creates a new instance of an identifier from the given integer representation
     *
     * @param int $identifier An integer representation of the identifier
     */
    public function createFromInteger(int $identifier): IntegerIdentifierInterface;
}
