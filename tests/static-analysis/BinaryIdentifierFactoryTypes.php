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
}
