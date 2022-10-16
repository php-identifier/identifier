<?php

declare(strict_types=1);

namespace Identifier\StaticAnalysis;

use Identifier\BinaryIdentifier;
use Identifier\BinaryIdentifierFactory;

final class BinaryIdentifierFactoryTypes
{
    public function __construct(private readonly BinaryIdentifierFactory $factory)
    {
    }

    public function createsIdentifier(): BinaryIdentifier
    {
        return $this->factory->create();
    }

    public function createsIdentifierFromBytes(string $bytes): BinaryIdentifier
    {
        return $this->factory->createFromBytes($bytes);
    }
}
