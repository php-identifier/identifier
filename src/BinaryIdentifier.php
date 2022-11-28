<?php

declare(strict_types=1);

namespace Identifier;

/**
 * Describes the interface of a binary-string identifier
 *
 * Binary-string identifiers are useful especially when the size of the
 * identifier overflows the system limitations for maximum/minimum integers.
 * For example, UUIDs and ULIDs, both 128-bit integers, are binary-string
 * identifiers.
 */
interface BinaryIdentifier extends Identifier
{
    /**
     * Returns the identifier as a raw byte string
     */
    public function toBytes(): string;
}
