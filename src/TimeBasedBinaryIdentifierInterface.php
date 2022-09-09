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

use DateTimeImmutable;

/**
 * Describes the interface of a time-based, binary-string identifier
 *
 * Time-based, binary-string identifiers have a timestamp embedded within the
 * identifier value.
 */
interface TimeBasedBinaryIdentifierInterface extends BinaryIdentifierInterface
{
    /**
     * Returns a PHP DateTimeImmutable representation of the timestamp
     * embedded within this identifier
     */
    public function getDateTime(): DateTimeImmutable;
}
