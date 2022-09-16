<?php

declare(strict_types=1);

namespace Identifier\StaticAnalysis;

use Identifier\BinaryIdentifierFactoryInterface;
use Identifier\BinaryIdentifierInterface;

final class BinaryIdentifierFactoryTypes
{
    public function __construct(private readonly BinaryIdentifierFactoryInterface $factory)
    {
    }

    public function createsIdentifier(): BinaryIdentifierInterface
    {
        return $this->factory->create();
    }

    public function createsIdentifierFromBytes(string $bytes): BinaryIdentifierInterface
    {
        return $this->factory->createFromBytes($bytes);
    }

    public function createsIdentifierFromRealInteger(int $integer): BinaryIdentifierInterface
    {
        return $this->factory->createFromInteger($integer);
    }

    /**
     * @param numeric-string $integer
     */
    public function createsIdentifierFromNumericString(string $integer): BinaryIdentifierInterface
    {
        return $this->factory->createFromInteger($integer);
    }

    public function createsIdentifierFromString(string $identifier): BinaryIdentifierInterface
    {
        return $this->factory->createFromString($identifier);
    }
}
