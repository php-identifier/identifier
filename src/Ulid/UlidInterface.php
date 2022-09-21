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

namespace Identifier\Ulid;

use DateTimeImmutable;
use Identifier\Binary\BinaryIdentifierInterface;

/**
 * Describes the interface of a ULID
 *
 * ULIDs are universally-unique, lexicographically-sortable identifiers,
 * provided as an alternative to UUIDs.
 *
 * @link https://github.com/ulid/spec ULID specification
 */
interface UlidInterface extends BinaryIdentifierInterface
{
    /**
     * Returns a date-time representation of the timestamp
     * embedded within this identifier
     */
    public function getDateTime(): DateTimeImmutable;
}
