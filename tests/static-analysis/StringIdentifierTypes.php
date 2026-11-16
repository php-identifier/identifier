<?php

declare(strict_types=1);

namespace Identifier\StaticAnalysis;

use Identifier\Exception\InvalidArgument;
use Identifier\Exception\NotConvertible;
use Identifier\StringIdentifier;
use Identifier\StringIdentifierFactory;

final readonly class StringIdentifierTypes
{
    public function __construct(
        private StringIdentifier $identifier,
        private StringIdentifierFactory $factory,
    ) {
    }

    /**
     * @return non-empty-string
     *
     * @throws NotConvertible
     */
    public function returnsStringValue(): string
    {
        return $this->identifier->toString();
    }

    public function createsStringIdentifier(): StringIdentifier
    {
        return $this->factory->create();
    }

    /**
     * @param non-empty-string $value
     *
     * @throws InvalidArgument
     */
    public function createStringIdentifier(string $value): StringIdentifier
    {
        return $this->factory->createFromString($value);
    }
}
