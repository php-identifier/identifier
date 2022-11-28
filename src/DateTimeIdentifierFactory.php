<?php

namespace Identifier;

interface DateTimeIdentifierFactory extends IdentifierFactory
{
    public function create(): DateTimeIdentifier;

    /**
     * Creates a new instance of an identifier from the given date-time
     *
     * @param \DateTimeInterface $dateTime The date-time to use when
     *     creating the identifier
     *
     * @throws Exception\InvalidArgument MUST throw if $dateTime is not a
     *     legal value
     */
    public function createFromDateTime(\DateTimeInterface $dateTime): DateTimeIdentifier;
}
