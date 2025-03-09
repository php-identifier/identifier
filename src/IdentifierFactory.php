<?php

declare(strict_types=1);

namespace Identifier;

/**
 * Creates identifiers
 */
interface IdentifierFactory
{
    /**
     * Creates a new instance of an identifier
     */
    public function create(): Identifier;
}
