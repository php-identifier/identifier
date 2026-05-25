<?php

declare(strict_types=1);

namespace Identifier\StaticAnalysis;

use Identifier\Exception\OutOfRange;
use Identifier\IntegerIdentifier;

final readonly class IntegerIdentifierTypes
{
    public function __construct(private IntegerIdentifier $identifier)
    {
    }

    /**
     * @throws OutOfRange
     */
    public function returnsIntegerValue(): int
    {
        $value = $this->identifier->toInteger();

        // Since decimal-int-string is not available until PHPStan 2.2, ignore the return type error emitted.
        // @phpstan-ignore return.type
        return $value + 1;
    }
}
