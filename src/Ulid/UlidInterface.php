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

namespace Identifier\Ulid;

use Identifier\Binary\TimeBasedBinaryIdentifierInterface;

/**
 * Describes the interface of a ULID
 *
 * ULIDs are universally-unique, lexicographically-sortable identifiers,
 * provided as an alternate for UUIDs.
 *
 * @link https://github.com/ulid/spec ULID specification
 */
interface UlidInterface extends TimeBasedBinaryIdentifierInterface
{
    /**
     * Returns a string representation of the identifier encoded with Douglas
     * Crockford's Base32 algorithm
     *
     * @link https://www.crockford.com/base32.html Crockford's Base32 algorithm
     *
     * @return non-empty-string
     */
    public function toCrockfordBase32(): string;
}
