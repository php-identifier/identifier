<?php

declare(strict_types=1);

namespace Identifier\StaticAnalysis\Uuid;

use Identifier\Uuid\UuidFactoryInterface;
use Identifier\Uuid\UuidInterface;

final class UuidFactoryTypes
{
    public function __construct(private readonly UuidFactoryInterface $factory)
    {
    }

    public function createsIdentifier(): UuidInterface
    {
        return $this->factory->create();
    }

    public function createsIdentifierFromBytes(string $bytes): UuidInterface
    {
        return $this->factory->createFromBytes($bytes);
    }

    public function createsIdentifierFromRealInteger(int $integer): UuidInterface
    {
        return $this->factory->createFromInteger($integer);
    }

    /**
     * @param numeric-string $integer
     */
    public function createsIdentifierFromNumericString(string $integer): UuidInterface
    {
        return $this->factory->createFromInteger($integer);
    }

    public function createsIdentifierFromString(string $identifier): UuidInterface
    {
        return $this->factory->createFromString($identifier);
    }
}
