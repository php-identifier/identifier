<?php

namespace Identifier;

interface DateTimeIdentifier extends Identifier
{
    /**
     * Returns a date-time representation of the timestamp associated with
     * this identifier
     */
    public function getDateTime(): \DateTimeImmutable;
}
