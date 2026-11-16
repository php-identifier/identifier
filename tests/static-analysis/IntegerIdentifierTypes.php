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

        return $value + 1;
    }

    /**
     * @param int | decimal-int-string $value
     *
     * @throws InvalidArgument
     */
    public function createIntegerIdentifier(int | string $value): IntegerIdentifier
    {
        return $this->factory->createFromInteger($value);
    }
}
