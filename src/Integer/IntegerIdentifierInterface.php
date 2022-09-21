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

use Identifier\IdentifierInterface;

/**
 * Describes the interface of an integer identifier
 */
interface IntegerIdentifierInterface extends IdentifierInterface
{
    /**
     * Returns an integer representation of the identifier
     */
    public function toInteger(): int;
}
