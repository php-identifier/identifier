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
     *
     * @throws Exception\NotConvertible MUST throw if the implementation cannot return the date-time associated with this identifier
     */
    public function getDateTime(): DateTimeImmutable;
}
