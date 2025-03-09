<?php

declare(strict_types=1);

namespace Identifier;

/**
 * An identifier based on arbitrary binary data
 */
interface BytesIdentifier extends Identifier
{
    /**
     * Returns the identifier as a raw byte string
     */
    public function toBytes(): string;
}
