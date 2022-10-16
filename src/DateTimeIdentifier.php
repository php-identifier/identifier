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

use DateTimeImmutable;

/**
 * Describes the interface of an identifier based on a date-time value
 */
interface DateTimeIdentifier extends Identifier
{
    /**
     * Returns a date-time representation of the timestamp associated with this identifier
     */
    public function getDateTime(): DateTimeImmutable;
}
