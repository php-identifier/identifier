<?php

declare(strict_types=1);

namespace Identifier;

use DateTimeImmutable;

/**
 * An identifier based on a date-time value
 */
interface DateTimeIdentifier extends Identifier
{
    /**
     * Returns a date-time representation of the timestamp associated with this identifier
     */
    public function getDateTime(): DateTimeImmutable;
}
