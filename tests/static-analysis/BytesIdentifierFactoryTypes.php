<?php

declare(strict_types=1);

namespace Identifier\StaticAnalysis;

use Identifier\BytesIdentifier;
use Identifier\BytesIdentifierFactory;

final class BytesIdentifierFactoryTypes
{
    public function __construct(private BytesIdentifierFactory $factory)
    {
    }

    public function createsIdentifier(): BytesIdentifier
    {
        return $this->factory->create();
    }

    public function createsIdentifierFromBytes(string $bytes): BytesIdentifier
    {
        return $this->factory->createFromBytes($bytes);
    }
}
