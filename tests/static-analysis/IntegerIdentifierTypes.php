<?php

declare(strict_types=1);

namespace Identifier\StaticAnalysis;

use Identifier\Exception\InvalidArgument;
use Identifier\Exception\NotConvertible;
use Identifier\IntegerIdentifier;
use Identifier\IntegerIdentifierFactory;

final readonly class IntegerIdentifierTypes
{
    public function __construct(
        private IntegerIdentifier $identifier,
        private IntegerIdentifierFactory $factory,
    ) {
    }

    /**
     * @throws NotConvertible
     */
    public function returnsIntegerValue(): int
    {
        $value = $this->identifier->toInteger();

        // I attempted to use decimal-int-string (available in PHPStan and
        // Psalm), but decimal-int-string does not allow arbitrary precision
        // integers, so I switched back to numeric-string, and I've chosen to
        // ignore the return type in this test, for now.
        // See: https://github.com/phpstan/phpstan/issues/15761
        // @phpstan-ignore return.type
        return $value + 1;
    }

    /**
     * @param int | numeric-string $value
     *
     * @throws InvalidArgument
     */
    public function createIntegerIdentifier(int | string $value): IntegerIdentifier
    {
        return $this->factory->createFromInteger($value);
    }
}
