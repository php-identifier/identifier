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

namespace Identifier\Integer;

use Identifier\IdentifierInterface;

/**
 * Describes the interface of an integer identifier
 */
interface IntegerIdentifierInterface extends IdentifierInterface
{
    /**
     * Returns an integer representation of the identifier
     *
     * Implementations may choose to support integers greater than PHP_INT_MAX
     * and less than PHP_INT_MIN. In this case, this method should return a
     * numeric string.
     *
     * @return int | numeric-string
     */
    public function toInteger(): int | string;
}
