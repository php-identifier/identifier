<?php

declare(strict_types=1);

namespace Identifier;

/**
 * Describes the interface of a factory used to create identifiers
 */
interface IdentifierFactory
{
    /**
     * Creates a new instance of an identifier
     */
    public function create(): Identifier;
}
