<?php

namespace Identifier;

interface IdentifierFactory
{
    /**
     * Creates a new instance of an identifier
     */
    public function create(): Identifier;
}
