<?php

namespace Identifier;

interface BinaryIdentifier extends Identifier
{
    /**
     * Returns the identifier as a raw byte string
     */
    public function toBytes(): string;
}
